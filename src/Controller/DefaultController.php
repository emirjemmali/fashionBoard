<?php

namespace App\Controller;
use App\Entity\Product;
use App\Entity\Produit;
use App\Form\ProductType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use JMS\Payment\CoreBundle\Plugin\Exception\Action\VisitUrl;
use JMS\Payment\CoreBundle\Plugin\Exception\ActionRequiredException;
use App\Entity\Fashionbundle;
use App\Entity\Order;
use JMS\Payment\CoreBundle\Form\ChoosePaymentMethodType;
use JMS\Payment\CoreBundle\PluginController\PluginController;
use JMS\Payment\CoreBundle\PluginController\Result;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="default")
     */
    public function index(SessionInterface $session)
    {
        if ($session->has('route')){
            if ($session->get('route')=='formule'){
                $session->remove('route');
                return $this->redirectToRoute('formule');

            }else {
                //redirecti lehne lel admin bel role

                return $this->render('default/baseAdmin.html.twig', [
                    'controller_name' => 'DefaultController',
                ]);
            }
        }
        $user=$this->container->get('security.authorization_checker');
        if (($user->isGranted('ROLE_ADMIN'))){
            return $this->render('backOffice/dashboard.html.twig');
        }
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    public function formule()
    {
        $fashionbundle = $this->getDoctrine()->getRepository(Fashionbundle::class)->findAll();
        return $this->render('default/formule.html.twig',array(
                'fashionbundle' => $fashionbundle
            )
        );
    }
    public function userProfile()
    {
        return $this->render('default/profile.html.twig');
    }
    public function purchase(SessionInterface $session,Request $request, PluginController $ppc)
    {        $idbundle=$request->get('idbundle');

        $em = $this->getDoctrine()->getManager();
        $bundle = $this->getDoctrine()->getManager()->getRepository('App:Fashionbundle')->find($idbundle);
        $usr=$this->getUser();
        $order = new Order($bundle->getPrice(),1);
        $order->setBundle($bundle);
        $em->persist($order);
        $em->flush();

        if ($usr==null){
            var_dump($usr);
            $session->set('route', 'formule');
            return $this->redirectToRoute('fos_user_security_login');
        }else{
            $form = $this->createForm(ChoosePaymentMethodType::class, null, [

                'amount'   => strval($bundle->getPrice()),
                'currency' => 'EUR',
            ]);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $ppc->createPaymentInstruction($instruction = $form->getData());

                $order->setPaymentInstruction($instruction);

                $em = $this->getDoctrine()->getManager();
                $em->persist($order);
                $em->flush($order);


                return $this->redirectToRoute('app_orders_paymentcreate', [
                    'orderId' => $order->getId(),
                ]);
            }
            return $this->render('default/purchase.html.twig',['form' => $form->createView(),'bundle'=>$bundle]);

        }
    }
    public function updateuser(SessionInterface $session,Request $request)
    {
        $usr=$this->getUser();
        var_dump($request->request->get('firstname'));
        $usr->setFirstname($request->request->get('firstname'));
        $usr->setLastname($request->request->get('firstname'));
        $usr->setPhonenumber($request->request->get('phone'));
        $usr->setAddress($request->request->get('city'));
        $usr->setState(true);
        $this->getDoctrine()->getManager()->persist($usr);
        $this->getDoctrine()->getManager()->flush();
        return new JsonResponse('success');
    }
    private function createPayment(Order $order, PluginController $ppc)
    {
        $instruction = $order->getPaymentInstruction();
        $pendingTransaction = $instruction->getPendingTransaction();

        if ($pendingTransaction !== null) {
            return $pendingTransaction->getPayment();
        }

        $amount = $instruction->getAmount() - $instruction->getDepositedAmount();

        return $ppc->createPayment($instruction->getId(), $amount);
    }
    /**
     * @Route("/{orderId}/payment/create",name="app_orders_paymentcreate")
     */
    public function paymentCreateAction($orderId, PluginController $ppc)
    {
        $order = $this->getDoctrine()->getManager()->getRepository(Order::class)->find($orderId);

        $payment = $this->createPayment($order, $ppc);

        $result = $ppc->approveAndDeposit($payment->getId(), $payment->getTargetAmount());

        if ($result->getStatus() === Result::STATUS_SUCCESS) {
            return $this->redirectToRoute('app_orders_paymentcomplete', [
                'orderId' => $order->getId(),
            ]);
        }
        if ($result->getStatus() === Result::STATUS_PENDING) {
            $order->setState(true);
            $order->setUser($this->getUser());
            $this->getDoctrine()->getManager()->persist($order);
            $this->getDoctrine()->getManager()->flush();
            $ex = $result->getPluginException();


            if ($ex instanceof ActionRequiredException) {
                $action = $ex->getAction();

                if ($action instanceof VisitUrl) {
                    return $this->redirect($action->getUrl());
                }
            }
        }
        throw $result->getPluginException();

        // In a real-world application you wouldn't throw the exception. You would,
        // for example, redirect to the showAction with a flash message informing
        // the user that the payment was not successful.
    }
    /**
     * @Route("/{orderId}/payment/complete",name="app_orders_paymentcomplete")
     */
    public function paymentCompleteAction($orderId)
    {
        var_dump('paymentcomplete');
        return new Response('Payment complete');
    }

    public function listFashionBoard()
    {
        return $this->render('backOffice/manageBundles.html.twig');

    }
    public function manageFashionBoard()
    {
        return $this->render('backOffice/manageFashionBoard.html.twig'
        );

    }
    public function manageOrders()
    {
        return $this->render('backOffice/manageBundles.html.twig');

    }
    public function manageQuiz()
    {
        return $this->render('backOffice/manageBundles.html.twig'
        );

    }
    public function addQuiz()
    {
        return $this->render('backOffice/addBundle.html.twig');

    }
    public function viewDashboard()
    {
        return $this->render('backOffice/dashboard.html.twig');

    }

}

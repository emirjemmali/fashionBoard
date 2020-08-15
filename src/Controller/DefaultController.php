<?php

namespace App\Controller;

use App\Entity\Fashionbundle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
            return $this->render('backOffice/manageBundles.html.twig');

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
    public function purchase(SessionInterface $session)
    {
        $usr=$this->getUser();
        if ($usr==null){
            var_dump($usr);
            $session->set('route', 'formule');
            return $this->redirectToRoute('fos_user_security_login');
        }else{
            return $this->render('default/purchase.html.twig');

        }
    }
    public function manageBundle()
    {
        return $this->render('backOffice/manageBundles.html.twig');

    }

    public function addBundle()
    {
        return $this->render('backOffice/addBundle.html.twig'
        );

    }
    public function addBundlebeta()
    {
        return $this->render('backOffice/addBundle.html.twig'
        );

    }
}

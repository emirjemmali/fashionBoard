<?php

namespace App\Controller;

use App\Entity\Fashionbundle;
use App\Entity\Produit;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
    public function manageProducts()
    {
        return $this->render('backOffice/manageBundles.html.twig');

    }
    public function addProduct()
    {
        return $this->render('backOffice/addProduct.html.twig');
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
    public function newProduct(Request $request)
    {
        $product = new Produit();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('brochure')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                //$safeFilename = $slugger->slug($originalFilename);
                // SluggerInterface $slugger
                $safeFilename = "test";
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $product->setBrochureFilename($newFilename);
            }

            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('manageProduct'));
        }

        return $this->render('backOffice/addProduct.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

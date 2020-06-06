<?php

namespace App\Controller;

use App\Form\CreatifType;
use App\Form\AttachmentType;
use App\Form\DesignerLDType;
use App\Repository\CreatifRepository;
use App\Repository\AttachmentRepository;
use App\Repository\DesignerldRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/acceuil", name="acceuil")
     */
    public function acceuil()
    {
        return $this->render('acceuil.html.twig');
    }

    /**
     * @Route("/add" , name="add")
     */
    public function add(EntityManagerInterface $manager, Request $request, DesignerldRepository $repo)
    {
        $designerlds=$repo->findAll();
        $form = $this->createForm(DesignerLDType::class);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            
            $path = $this->getParameter('kernel.project_dir') .'/public/images/bq_image/';            
            //recupere les donnée sous form de l'objet designerld
            $designerld = $form->getData();
            $user= $this->getUser();

            $designerld->setUser($user);
            $image = $designerld->getImage();

            $file = $image->getFile();

            $name = md5(uniqid()). '.'.$file->guessExtension();
            
            $file->move($path, $name);

            $image->setName($name);

            
            $manager->persist($designerld);
            $manager->flush();

            $this->addFlash(
                'notice',
                'Super !'
            );
            

            return $this->redirectToRoute('add');
        }

        return $this->render('add.html.twig', [
            'form' => $form->createView(),
            'designerlds'=>$designerlds,
        ]);
        
    }

    /**
     * @Route("/showu/" , name="showu")
     */
    public function showu(DesignerldRepository $repo)
    {
        $designerlds=$repo->findAll();
        return $this->render('indexf.html.twig' , [
            'designerlds'=>$designerlds,
        ]);
    }

    /**
     * @Route("/gallerie/" , name="gallerie")
     */
    public function gallery(DesignerldRepository $repo)
    {
        
        $designerlds=$repo->findAll();
        return $this->render('gallery.html.twig' , [
            'designerlds'=>$designerlds,
        ]);
    }

    /**
     * @Route("/crea" , name="crea")
     */
    public function creation(EntityManagerInterface $manager, Request $request, CreatifRepository $repo)
    {
        $creatifs=$repo->findAll();
        $form = $this->createForm(CreatifType::class);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            
            $path = $this->getParameter('kernel.project_dir') .'/public/images/crea';            
            //recupere les donnée sous form de l'objet creatif
            $creatif = $form->getData();
            $user= $this->getUser();

            $creatif->setUser($user);
            $crea = $creatif->getCrea();

            $file = $crea->getFile();

            $name = md5(uniqid()). '.'.$file->guessExtension();
            
            $file->move($path, $name);

            $crea->setName($name);

            
            $manager->persist($creatif);
            $manager->flush();

            $this->addFlash(
                'notice',
                'Super ! Une nouvelle prestatiare a été ajouté'
            );
            

            return $this->redirectToRoute('crea');
        }

        return $this->render('crea.html.twig', [
            'form' => $form->createView(),
            'creatifs'=>$creatifs,
        ]);
        
    }

    /**
     * @Route("/team", name="team")
     */
    public function team()
    {
        return $this->render('team.html.twig');
        
    }
}

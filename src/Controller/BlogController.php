<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    

    /**
    * @Route("/", name="index")
    */
    
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
        
        
        ]);

}

    /**
    * @Route("/blog", name="home")
    */
    public function home()
    {

        return $this->render('blog/home.html.twig', [

    
        ]);
        }

    /**
    * @Route("/homeanglais", name="home_anglais")
    */
    public function home_anglais()
    {

        return $this->render('homeanglais/home_anglais.html.twig', [

    
        ]);
    }   


    /**
    * @Route("/portofolio", name="portofolio")
    */
    public function portofolio()
    {

        return $this->render('portofolio/portofolio.html.twig', [

    
        ]);
        }


        
    /**
    * @Route("/viepriver", name="viepriver")
    */
    public function viepriver()
    {

        return $this->render('viepriver/vie.html.twig', [

    
        ]);
        }

    
    /**
    * @Route("/cvpage", name="cvpage")
    */
    public function cvpage()
    {

        return $this->render('cvpage/cv.html.twig', [

    
        ]);
        }
    

    /**
    * @Route("/indexanglais", name="indexanglais")
    */
    public function indexanglais()
    {

        return $this->render('indexanglais/indexanglais.html.twig', [

    
        ]);
    }


    /**
    * @Route("/viepriveranglais", name="viepriveranglais")
    */
    public function viepriveranglais()
    {

        return $this->render('viepriveranglais/viepriveranglais.html.twig', [

    
        ]);
    }



}


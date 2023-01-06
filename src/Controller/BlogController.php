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
      
        {
            
         
            $this->setValidators(array(
              'name'    => new sfValidatorString(array('required' => true) ),
              'name'    => new sfValidatorString(array('min_length' => 4) ),
              'email'   => new sfValidatorEmail(array(), array('invalid' => 'L\'adresse email est invalide.')),
              ));
            
          }
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



}

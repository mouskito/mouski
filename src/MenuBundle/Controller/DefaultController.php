<?php

namespace MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArticleGeneralBundle:Default:index.twig');
    }


   //Page about
     public function aboutAction()
    {
        //$name = 'mouski';
        
        return $this->render('ArticleGeneralBundle:Default:about.html.twig');
    }

    //Page Message
     public function messageAction()
    {
        //$name = 'mouski';
        
        return $this->render('ArticleGeneralBundle:Default:message.html.twig');
    }


    // Dernieres questions
     public function lastQuestionAction()
    {
        //$name = 'mouski';
        
        return $this->render('ArticleGeneralBundle:Default:lastQuestion.html.twig');
    }


}

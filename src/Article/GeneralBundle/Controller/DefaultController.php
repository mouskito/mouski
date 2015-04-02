<?php

namespace Article\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Article\GeneralBundle\Entity\Questions;

use Article\GeneralBundle\Form\QuestionsType;

//use Article\GeneralBundle\Entity\Questions;

//use Article\GeneralBundle\Reponse;



class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $questions = $em->getRepository("ArticleGeneralBundle:Questions")->findAll();

        return $this->render('ArticleGeneralBundle:Default:index.html.twig', array(
            'Questions' => $questions,
            ));
            
    	//$name = 'mouski';
    	
       //return $this->render('ArticleGeneralBundle:Default:index.html.twig');
    }

    //Page about
     public function aboutAction()
    {
    	//$name = 'mouski';
    	
        return $this->render('ArticleGeneralBundle:Default:about.html.twig');
    }

    //Page Message
     public function forumAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $questions = $em->getRepository("ArticleGeneralBundle:Questions")->findAll();

        //return $this->render('ArticleGeneralBundle:Default:index.html.twig'
    	
        return $this->render('ArticleGeneralBundle:Default:forum.html.twig', array(
            'Questions' => $questions,
            ));
    }


    // Dernieres questions
     public function lastQuestionAction()
    {
        //$name = 'mouski';
        
        return $this->render('ArticleGeneralBundle:Default:lastQuestion.html.twig');
    }


    // poser questions
     public function ajouterAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $question = new Questions();

        $form = $this->createForm(new QuestionsType(), $question);
        //$name = 'mouski';
        
        $request = $this->getRequest();
        if($request->isMethod('Post')){

            $form->bind($this->getRequest());
            $question = $form->getData();

            $em->persist($question);
            $em->flush();
        
            return $this->redirect($this->generateUrl("article_general_homepage"));
        
        }

//Pour recuperer le user connecte
//     $objUser = $this->get('security.context')->getToken()->getUser(); 

// echo "string". $objUser;
        return $this->render('ArticleGeneralBundle:Default:ajouter.html.twig', array(
            'form' => $form->createView(),
            ));
    }

     // Formulaire d'inscription
    //  public function inscriptionAction()
    // {
    //     //$name = 'mouski';
        
    //     return $this->render('UserUserBundle:Registration:register.html.twig');
    // }

     // Formulaire de contact
     public function contactAction()
    {
         $em = $this->getDoctrine()->getEntityManager();

        $question = new Questions();

        $form = $this->createForm(new QuestionsType(), $question);
        //$name = 'mouski';
        
        $request = $this->getRequest();
        if($request->isMethod('Post')){

            $form->bind($this->getRequest());
            $question = $form->getData();

            $em->persist($question);
            $em->flush();
        
            return $this->redirect($this->generateUrl("article_general_homepage"));
        
        }

        return $this->render('ArticleGeneralBundle:Default:contact.html.twig', array(
            'form' => $form->createView(),
            ));
    }


    // L'equipe
     public function equipeAction()
    {
        //$name = 'mouski';
        
        return $this->render('ArticleGeneralBundle:Default:equipe.html.twig');
    }
    
      // Voir une question
     public function voirAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $question = $em->getRepository("ArticleGeneralBundle:Questions")->findBy($id);

        return $this->render('ArticleGeneralBundle:Default:voir.html.twig', array(
            'question' => $question,
            ));

    //     if (null === $question) {

    //   throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");

    // }

    // // On récupère la liste des candidatures de cette annonce

    // $listApplications = $em

    //   ->getRepository('ArticleGeneralBundle:Reponse')

    //   ->findBy(array('advert' => $question))

    // ;

    // return $this->render('ArticleGeneralBundle:Default:voir.html.twig', 
    //     array(

    //   'advert'           => $question,

    //   'listApplications' => $listApplications

    // ));
    }
}

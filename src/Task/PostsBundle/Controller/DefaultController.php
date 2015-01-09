<?php

namespace Task\PostsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Task\PostsBundle\Entity\posts;
use Task\PostsBundle\Entity\categories;
use Symfony\Component\HttpFoundation\Response;
use Task\PostsBundle\Form\Post\PostForm;

class DefaultController extends Controller
{
    
    
    /**
     * @Route("/")
     * @Template("TaskPostsBundle:Default:posts.html.twig")
     */
    public function PostsAction(){
        $getManager= $this->getDoctrine()->getManager(); // Get Entity Manager
        $getRepository= $getManager->getRepository("TaskPostsBundle:posts"); // get repository
        $allPosts= $getRepository->createQueryBuilder('p') // query
                ->addSelect('c')
                ->join('p.categoryID', 'c')
                ->where('p.publishDate <= \''.date('Y-m-d H:i:s').'\'') // to get posts has publish Date Before now
                ->getQuery()
                ->getResult();
        
        return array("posts"=>$allPosts);
    }
    
    
    /**
     * @Route("/create")
     * @Template("TaskPostsBundle:Default:create.html.twig")
     */
    public function createAction(Request $request)
    {
        $task = new posts(); // Form Validation
        $form = $this->createForm(new PostForm(), $task);
       
        $form->handleRequest($request);
        
        if ($form->isValid()) {  // if validation true
            $getManager = $this->getDoctrine()->getEntityManager();  // Get Entity Manager
            $newData = $form->getData(); 
            $newData->setTitle($newData->getTitle());
            $newData->setContent($newData->getContent());
            $course = $this->getDoctrine()->getManager() // put category in object (OneToMany)
                    ->getRepository('TaskPostsBundle:categories')
                    ->findOneById($newData->getCategoryID());
            
            $newData->setCategoryID($course);
            $newData->setPublishDate(new \DateTime($newData->getPublishDate())); //Convert To DateTime
            
            
            $getManager->persist($newData);
            $getManager->flush();
            
            $this->get('braincrafted_bootstrap.flash')->success('Your post Was saved.');
            return $this->redirect($this->generateUrl('task_posts_default_create')); // redirect to new form


        }
        
        return array('form' => $form->createView());
    }
    
    
}

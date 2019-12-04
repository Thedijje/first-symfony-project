<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class BlogController extends AbstractController{


    /**
     *  
     * @Route("/blog"); 
     * 
     */
    public function list()
    {
        $blogs  =   array(
            array('title'=>md5(rand()), 'snippet'=>sha1(rand())),
            array('title'=>md5(rand()), 'snippet'=>sha1(rand())),
            array('title'=>md5(rand()), 'snippet'=>sha1(rand())),
            array('title'=>md5(rand()), 'snippet'=>sha1(rand()))
        );

        return $this->render('blog/list.html.twig', [
            'blogs' =>  $blogs,
        ]);
    }

}
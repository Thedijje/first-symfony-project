<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
      * @Route("/")
     */

    public function index()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }


    /**
     * 
     * @Route("/login");
     * 
     */
    public function login()
    {
        return new Response(
            "Here is login page"
        );
        
    }

    /**
     * 
     * @Route("/signup");
     * 
     */

     public function signup()
     {
         $title     =   "Get started with symfony";
         return $this->render(
             'signup/signup.html.twig',[
                 'title'    =>  $title,
             ]
             );
     }
}

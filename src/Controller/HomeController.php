<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;




class HomeController extends AbstractController

{

    #[Route('/')]

    public function home() : Response

    {

	return new Response("bonjour") ;
 
     }


     #[Route('/mysqladmin', name: 'mysqladmin')]
     public function mysqlAdmin(): RedirectResponse
     {
         return $this->redirectToRoute('phpmyadmin');
     }

}
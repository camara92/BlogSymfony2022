<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {       $post =new Post(); 
          $post = new Post();
        $post->setTitle("Titre");
        $post->setContent('Daouda est un développeur de nom ');
        $post->setAuthor('CAMARA Daouda');
        $post->setCreatedAt(date_create_immutable());


        //dd($post);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'post'=>$post
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(PostRepository $ripo)
    {
        $post = $ripo->findAll();

        return $this->render('home/index.html.twig', [
            'post' => $post
        ]);
    }

    /**
     * @Route("/post/{id}", name="show_post")
     */
    public function show(Post $post)
    {
        return $this->render('home/post.html.twig', [
            'post' => $post
        ]);
    }
}
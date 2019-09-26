<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends AbstractController
{
    /** @var PostRepository $postRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @Route("/posts", name="blog_posts")
     */
    public function posts()
    {
        $posts = $this->postRepository->findAll();

        return $this->render('posts/index.html.twig', [
            'posts' => $posts
        ]);
    }
    
    /**
     * @Route("/posts/{slug}", name="blog_show")
     */
    public function post(Post $post)
    {
        return $this->render('posts/show.html.twig', [
            'post' => $post
        ]);
    }





    /**
     * @Route("/posts", name="posts")
     */
   /* public function index()
    {
        $posts = [
            'post_1' => [
                'title' => 'Заголовок первого поста',
                'body' => 'Тело первого поста'
            ],
            'post_2' => [
                'title' => 'Заголовок второго поста',
                'body' => 'Тело второго поста'
            ]
        ];
        return $this->render('posts/index.html.twig', [
            'posts' => $posts,
        ]);
    }*/


}

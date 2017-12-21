<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Posts;
use AppBundle\Form\PostsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        dump($request->get('name', 777));
        die();
    }

    /**
     * @Route("/post/", name="posts")
     */
    public function getPostsAction(Request $request)
    {
        $search = $request->get('search');
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Posts')->getPosts($search);

        return $this->render('@App/Posts/posts.html.twig', [
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/post/add/", name="postsadd")
     */
    public function postAddAction(Request $request)
    {
        $post = new Posts();
        $form = $this->createForm(PostsType::class, $post);
        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);//данные объекта загонит в кэш-базу самого симфони
            $em->flush();//загонит в бд
            $this->addFlash('success', 'Пост добавлен успешно');
            return $this->redirectToRoute('posts');
        }

        return $this->render('@App/Posts/post_add.html.twig', [
           'form' => $form->createView(),
        ]);

    }

    /**
     * Matches /post/*
     *
     * @Route("/post/{post}/", name="post", requirements={"id"="\d+"})
     */
    public  function getPostAction(Request $request, Posts $post) {

        //для ajax
        //return new JsonResponse([]);

        return $this->render('@App/Posts/detail_post.html.twig', [
            'post' => $post
        ]);
    }
}
<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Posts;
use AppBundle\Form\PostsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/post/", name="testpage")
     */
    public function postAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Posts')->getPosts();

//        foreach ($posts as $post) {
//            dump($post->getContent());
//        }

        return $this->render('@App/index.html.twig', [
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/post/add/", name="testpage")
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
        }

        return $this->render('@App/Posts/post_add.html.twig', [
           'form' => $form->createView(),
        ]);
    }
}
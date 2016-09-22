<?php

namespace PhpBelfast\Controllers;


class PostController extends BaseController{

    public function index()
    {
        $posts = $this->app->postRepo->getAll();
        $this->view->set('posts', $posts);
        $this->app->render('news/index.twig.php');
    }

    public function item($id)
    {
        $post = $this->app->postRepo->getById($id);
        if (!$post) {
            $this->app->pass();
        } else {
            $this->view->set('post', $post);
            $this->app->render('news/item.twig.php');
        }
    }

} 
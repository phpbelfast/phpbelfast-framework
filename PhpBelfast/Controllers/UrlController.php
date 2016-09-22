<?php
/**
 * Created by PhpStorm.
 * User: stephen
 * Date: 02/10/2014
 * Time: 19:19
 */

namespace PhpBelfast\Controllers;


class UrlController extends BaseController {

    public function index()
    {
        $this->app->render('url/index.twig.php');
    }

    public function show()
    {
        // from db

        $urls = $this->app->urlRepo->getAll();

        if ($urls) {

            foreach ($urls as $url) {

                $url->short = sprintf(
                    'http://%s/%s',
                    $this->app->request->getHost(),
                    $url->short
                );

            }

        }

        $this->app->render('url/show.twig.php', array(
            'urls' => $urls
        ));
    }

    public function store()
    {
        // check db

        $url = $this->app->urlRepo->getByUrl(
            $this->app->request->post('url')
        );

        // not create short code

        if (!$url->short) {

            $url->short = $this->app->convert->toBase36($url->id);
            $url->save();

        }

        $url->short = sprintf(
            'http://%s/%s',
            $this->app->request->getHost(),
            $url->short
        );

        // show

        $this->app->render('url/index.twig.php', array(
           'url' => $url
        ));
    }

    public function check($short)
    {
        $id = $this->app->convert->fromBase36($short);

        if ($url = $this->app->urlRepo->getBy($id)) {
            $this->app->redirect($url->url);
        }

        $this->app->pass();
    }
} 
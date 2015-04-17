<?php

namespace PhpBelfast\Controllers;


class EventController extends BaseController{

    public function index()
    {
        $events = $this->app->eventRepo->getAll();
        $this->view->set('events', $events);
        $this->app->render('events/index.twig');
    }

    public function item($id)
    {
        $event = $this->app->eventRepo->getById($id);
        if (!$event) {
            $this->app->pass();
        } else {
            $this->view->set('event', $event);
            $this->app->render('events/item.twig');
        }
    }

} 
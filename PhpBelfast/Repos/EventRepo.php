<?php
namespace PhpBelfast\Repos;

use PhpBelfast\Models\Event;

class EventRepo {

    public function getAll()
    {
        return Event::orderBy('start_time','ASC')->get();
    }

    public function getById($id)
    {
        $event = Event::find($id);
        if(empty($event->id)) {
            return false;
        } else {
            return $event;
        }
    }
} 
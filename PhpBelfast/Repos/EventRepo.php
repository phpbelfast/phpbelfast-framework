<?php
namespace PhpBelfast\Repos;

use PhpBelfast\Models\Event;

class EventRepo {

    public function getAll()
    {
        return Event::with('author')->orderBy('start_time','ASC')->get();
    }

    public function getById($id)
    {
        $event = Event::where('id','=',$id)->with(['author'])->first();
        if(empty($event->id)) {
            return false;
        } else {
            return $event;
        }
    }
} 
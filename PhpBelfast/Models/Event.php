<?php
namespace PhpBelfast\Models;

use Illuminate\Database\Eloquent\Model;
use PhpBelfast\Traits\Authorable;
use PhpBelfast\Traits\Sluggable;

/**
 * Class Post
 * @package PhpBelfast\Models
 */
class Event extends Model {

    use Authorable, Sluggable;

    public $sluggable='start_time';

    private function getSluggableValue()
    {
        return $this->start_time->format('Y-M')
            .' '.$this->author->name;
    }

    public function getDates()
    {
        return array('created_at','updated_at','start_time');
    }

}
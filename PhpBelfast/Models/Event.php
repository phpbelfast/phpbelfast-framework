<?php
namespace PhpBelfast\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package PhpBelfast\Models
 */
class Event extends Model {


    public function getDates()
    {
        return array('created_at','updated_at','start_time');
    }

}
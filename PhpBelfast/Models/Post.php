<?php
namespace PhpBelfast\Models;

use Illuminate\Database\Eloquent\Model;
use PhpBelfast\Traits\Authorable;
use PhpBelfast\Traits\Sluggable;

/**
 * Class Post
 * @package PhpBelfast\Models
 */
class Post extends Model {

    use Authorable, Sluggable;

}
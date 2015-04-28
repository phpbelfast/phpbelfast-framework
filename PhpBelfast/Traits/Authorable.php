<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 23/04/15
 * Time: 21:07
 */

namespace PhpBelfast\Traits;


trait Authorable {

    public function author(){
        return $this->belongsTo('\PhpBelfast\Models\Author');
    }

}
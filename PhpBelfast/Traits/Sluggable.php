<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 23/04/15
 * Time: 21:10
 */

namespace PhpBelfast\Traits;


trait Sluggable {


    public function getSlug()
    {
        $value = $this->getSluggableValue();
        return str_slug($value);
    }

    private function getSluggableValue()
    {
        if(property_exists($this,'sluggable')) {
            $attribute = $this->sluggable;
            return $this->$attribute;
        }
        return $this->title;
    }


}
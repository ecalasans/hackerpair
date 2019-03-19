<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{

    use Sluggable;

    public function getNameAttribute($value){
        $ignore = ['a', 'and', 'at', 'but', 'for', 'in', 'the', 'to', 'with'];

        $name = explode(' ', $value);

        $modifiedName = [];

        foreach ($name as $word){
            if(!in_array(strtolower($word), $ignore)){
                $modifiedName[] = ucfirst($word);
            } else {
                $modifiedName[] = strtolower($word);
            }
        }
        return join(' ', $modifiedName);
    }

    public function sluggable(){
        return [
            'slug' => ['source' => 'name']
        ];
    }

    public function getRouteKey(){
        return 'slug';
    }
}

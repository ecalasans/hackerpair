<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model{

    use Sluggable, SluggableScopeHelpers;

    use SoftDeletes;

    protected $dates =['created_at', 'deleted_at', 'started_at', 'updated_at'];

    protected $fillable = ['name', 'venue', 'state_id', 'description'];

    public function getNameAttribute($value){
        $ignore = ['a', 'and', 'at', 'but', 'for', 'in', 'the', 'to', 'with'];

        $name = explode(' ', $value);

        $modifiedName = [];

        foreach ($name as $word){
            if(! in_array(strtolower($word), $ignore)){
                $modifiedName[] = ucfirst($word);
            } else {
                $modifiedName[] = strtolower($word);
            }
        }

        return join(' ', $modifiedName);
    }

    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function state(){
        return $this->belongsTo('App\State');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Organization extends Model
{
    use Sluggable;

    protected $fillable = ['nameOrganization','longitude','latitude', 'statusOrganization',
        'numberDocumentation'];

//    public function culture()
//    {
//        return $this->hasMany(Culture::class, 'culture_id');
//    }
//
//    public function Event()
//    {
//        return $this->hasMany(Event::class, 'event_id');
//    }

    public function director()
    {
        return $this->hasOne(Director::class, 'director_id');
    }

    public function responsible()
    {
        return $this->hasOne(Responsible::class, 'responsible_id');
    }

    public function teachers()
    {
        return $this->hasMany(Teachers::class, 'teachers_id');
    }

    public function museums()
    {
        return $this->hasMany(Museums::class, 'museums_id');
    }

    public function cabinets()
    {
        return $this->hasMany(Cabinets::class, 'cabinets_id');
    }

    public function others()
    {
        return $this->hasMany(Others::class, 'others_id');
    }

    public static function add($fields)
    {
        $data = new static;
        $data->fill($fields);
        $data->save();
        return $data;
    }

    public function sluggable()
    {
       return [
           'slug' => [
               'source' => 'nameOrganization'
           ]
       ];
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->delete();
    }
}

<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use Sluggable;

    protected $fillable = ['surnameResp', 'nameResp', 'patronymicResp', 'telephoneResp'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
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
                'source' => 'surnameResp'
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

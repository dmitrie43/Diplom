<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalInfo extends Model
{
    protected $fillable = ['additionalInfo'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public static function add($fields)
    {
        if (!empty($fields['additionalInfo'])) {
            $data = new static;
            $data->fill($fields);
            $data->save();
            return $data;
        }
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

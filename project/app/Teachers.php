<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Teachers extends Model
{

    protected $fillable = ['surnameTeach', 'nameTeach', 'patronymicTeach'];

    public function organization()
    {
        return $this->belongsToMany(Organization::class);
    }

    public static function add($fields)
    {
        if ($fields[0] != null) {
            $data = new static;
            $keys = ['surnameTeach', 'nameTeach', 'patronymicTeach'];
            for ($i = 0; $i < count($fields); $i += 3)
            {
                $treeElem = array_slice($fields, $i, 3);
                $res[] = array_combine($keys, $treeElem);
            }
            $data->insert($res);
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['authorBook', 'nameBook', 'publishBook', 'yearBook'];

    public function organization()
    {
        return $this->belongsToMany(Organization::class);
    }

    public static function add($fields)
    {
        if ($fields[0] != null) {
            $data = new static;
            $keys = ['authorBook', 'nameBook', 'publishBook', 'yearBook'];
            for ($i = 0; $i < count($fields); $i += 4)
            {
                $treeElem = array_slice($fields, $i, 4);
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectStudy extends Model
{
    protected $fillable = ['nameSubject', 'levelSubject'];

    public function organization()
    {
        return $this->belongsToMany(Organization::class);
    }

    public static function add($fields)
    {
        if ($fields[0] != null) {
            $data = new static;
            $keys = ['nameSubject', 'levelSubject'];
            for ($i = 0; $i < count($fields); $i += 2)
            {
                $treeElem = array_slice($fields, $i, 2);
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

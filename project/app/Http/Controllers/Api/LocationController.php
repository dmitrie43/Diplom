<?php

namespace App\Http\Controllers\Api;

use App\Event;
use App\Http\Resources\OrganizationResource;
use App\Organization;
use App\Responsible;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index()
    {
        $data = Organization::all();
        return json_encode(OrganizationResource::collection($data), JSON_UNESCAPED_UNICODE);
    }

    public function show(Organization $organization)
    {
        $org = Organization::where('id', $organization->id)->select('nameOrganization', 'longitude', 'latitude', 'statusOrganization', 'numberDocumentation')->get();
        $resp = Organization::find($organization->id)->responsible()->select('surname', 'name', 'patronymic', 'telephone')->get();
        $dir = Organization::find($organization->id)->director()->select('surname', 'name', 'patronymic')->get();
        $teach = Organization::find($organization->id)->teachers()->select('surname', 'name', 'patronymic')->get();
        $museum = Organization::find($organization->id)->museums()->select('description', 'exposition', 'head')->get();
        $cab = Organization::find($organization->id)->cabinets()->select('description', 'head')->get();
        $other = Organization::find($organization->id)->others()->select('description')->get();
        $sub = Organization::find($organization->id)->subjectStudy()->select('title', 'level')->get();
        $book = Organization::find($organization->id)->book()->select('author', 'name', 'publish', 'year')->get();
        $meth = Organization::find($organization->id)->methodolog()->select('author', 'name', 'publish', 'year')->get();
        $open = Organization::find($organization->id)->openClassroom()->select('description', 'class', 'head')->get();
        $soc = Organization::find($organization->id)->society()->select('name', 'class', 'head', 'description')->get();
        $col = Organization::find($organization->id)->collective()->select('head', 'name', 'ageChildren', 'description')->get();
        $event = Organization::find($organization->id)->event()->select('level', 'form', 'name', 'date')->get();
        $add = Organization::find($organization->id)->additionalInfo()->select('description')->get();
        $simple = [$org, $resp, $dir, $add, $other];
        $arr = [];

        foreach ($simple as $item) {
            foreach ($item as $elem) {
                $arr[] = $elem;
            }
        }
        $org2 = $arr[0];
        $resp2 = $arr[1];
        $dir2 = $arr[2];
        $add2 = $arr[3];
        $other2 = $arr[4];

        $res = [
            'organization' => $org2,
            'responsible' => $resp2,
            'director' => $dir2,
            'teachers' => $teach,
            'museums' => $museum,
            'cabinets' => $cab,
            'others' => $other2,
            'subjects' => $sub,
            'books' => $book,
            'methodologs' => $meth,
            'openClassrooms' => $open,
            'societies' => $soc,
            'collectives' => $col,
            'events' => $event,
            'additionalInfo' => $add2
        ];
//        $res = [
//            'организация' => $org2,
//            'ответственный' => $resp2,
//            'директор' => $dir2,
//            'учителя' => $teach,
//            'музеи' => $museum,
//            'кабинеты' => $cab,
//            'прочее' => $other,
//            'предметы' => $sub,
//            'книги' => $book,
//            'методички' => $meth,
//            'факультативы' => $open,
//            'кружки' => $soc,
//            'коллективы' => $col,
//            'мероприятия' => $event,
//            'дополнительная информация' => $add
//        ];

        return json_encode($res, JSON_UNESCAPED_UNICODE);
//        $array2 = [
//            ['organization' => $org],
//            ['responsible' => $resp],
//            ['director' => $dir],
//            ['teachers' => $teach],
//            ['museums' => $museum],
//            ['cabinets' => $cab],
//            ['others' => $other],
//            ['subjects' => $sub],
//            ['books' => $book],
//            ['methodologs' => $meth],
//            ['openClassrooms' => $open],
//            ['societies' => $soc],
//            ['collectives' => $col],
//            ['events' => $event],
//            ['additionalInfo' => $add]
//        ];
//        $array = [$org, $resp, $dir, $teach, $museum, $cab, $other, $sub,
//            $book, $meth, $open, $soc, $col, $event, $add];
//        $keys = ['organization', 'responsible', 'director', 'teachers', 'museums', 'cabinets', 'others',
//            'subjects', 'books', 'methodologs', 'openClassrooms', 'societies', 'collectives', 'events', 'additionalInfo'];
//        foreach ($array as $elem) {
//            foreach ($elem as $item) {
//                dd($item);
//                $res2[] = $item;
//                echo json_encode($item, JSON_UNESCAPED_UNICODE);
//                $res = array_combine($keys, $item);
//            }
//        }
//        $res = array_combine($keys, $res1);
//        dd(json_encode($res2, JSON_UNESCAPED_UNICODE));

//        $res = object_get();
//        foreach ($array as $elem) {
//            foreach ($elem as $item) {
//                dd($item['table']);
//                echo json_encode($item, JSON_UNESCAPED_UNICODE);
//            }
//        }

    }

    public function name() {
        $res = [
            'teachers' => 'учителя',
            'museums' => 'музеи',
            'cabinets' => 'кабинеты',
            'others' => 'прочее',
            'subjects' => 'предметы',
            'books' => 'учебники',
            'methodologs' => 'методические обеспечение',
            'openClassrooms' => 'факультативы',
            'societies' => 'кружки',
            'collectives' => 'коллективы',
            'events' => 'мероприятия',
            'additionalInfo' => 'дополнительная информация'
        ];

        return json_encode($res, JSON_UNESCAPED_UNICODE);
    }
}

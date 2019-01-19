<?php

namespace App\Http\Controllers;

use App\AdditionalInfo;
use App\Book;
use App\Cabinets;
use App\Collective;
use App\Director;
use App\Event;
use App\Methodolog;
use App\Museums;
use App\OpenClassroom;
use App\Organization;
use App\Others;
use App\Responsible;
use App\Society;
use App\SubjectStudy;
use App\Teachers;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $lists = Organization::all();
        return view('list', compact('lists'));
    }

    public function fullData($id)
    {
        $org = Organization::where('id', $id)->get();
//        $resp = Responsible::where('id', $id)->get();
//        $dir = Director::where('id', $id)->get();
//        $teach = Teachers::where('id', $id)->get();
//        $cab = Cabinets::where('id', $id)->get();
//        $mus = Museums::where('id', $id)->get();
//        $other = Others::where('id', $id)->get();
//        $sub = SubjectStudy::where('id', $id)->get();
//        $book = Book::where('id', $id)->get();
//        $meth = Methodolog::where('id', $id)->get();
//        $open = OpenClassroom::where('id', $id)->get();
//        $soc = Society::where('id', $id)->get();
//        $col = Collective::where('id', $id)->get();
//        $event = Event::where('id', $id)->get();
//        $add = AdditionalInfo::where('id', $id)->get();
        return view('fulldata', compact('org', 'resp', 'dir', 'teach',
            'cab', 'mus', 'other', 'sub', 'book', 'meth', 'open', 'soc',
            'col', 'event', 'add'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nameOrganization' => 'required',
            'surnameDir' => 'required',
            'nameDir' => 'required',
            'patronymicDir' => 'required',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'telephoneResp' => 'numeric',
            'surnameResp' => 'required',
            'nameResp' => 'required',
            'patronymicResp' => 'required'
        ]);

        Organization::add($request->all());
        Responsible::add($request->all());
        Director::add($request->all());
        Teachers::add($request->Teacher);
        Cabinets::add($request->Cabinets);
        Museums::add($request->Museums);
        Others::add($request->Others);
        SubjectStudy::add($request->Subject);
        Book::add($request->Book);
        Methodolog::add($request->Methodolog);
        OpenClassroom::add($request->openClassroom);
        Society::add($request->Society);
        Collective::add($request->Collective);
        Event::add($request->Event);
        AdditionalInfo::add($request->all());
        return redirect()->route('list');
    }

    public function destroy($id)
    {
        Organization::find($id)->remove();
        return redirect()->route('list');
    }

    public function edit($id)
    {
        $list = Organization::find($id);
        return view('edit', compact('list'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nameOrganization' => 'required',
            'fullNameDirector' => 'required',
            'longitude' => 'required',
            'latitude' => 'required'
        ]);

        $list = Organization::find($id);
        $list->edit($request->all());
        return redirect()->route('list');
    }
}

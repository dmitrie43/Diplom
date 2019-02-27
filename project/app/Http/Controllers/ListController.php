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
use PhpParser\Node\Scalar\MagicConst\Dir;

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
        $resp = Organization::find($id)->responsible()->get();
        $dir = Organization::find($id)->director()->get();
        $teach = Organization::find($id)->teachers()->get();
        $museum = Organization::find($id)->museums()->get();
        $cab = Organization::find($id)->cabinets()->get();
        $other = Organization::find($id)->others()->get();
        $sub = Organization::find($id)->subjectStudy()->get();
        $book = Organization::find($id)->book()->get();
        $meth = Organization::find($id)->methodolog()->get();
        $open = Organization::find($id)->openClassroom()->get();
        $soc = Organization::find($id)->society()->get();
        $col = Organization::find($id)->collective()->get();
        $event = Organization::find($id)->event()->get();
        $add = Organization::find($id)->additionalInfo()->get();
        return view('fulldata', compact('org', 'resp', 'dir', 'teach',
            'cab', 'museum', 'other', 'sub', 'book', 'meth', 'open', 'soc',
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
//            'surnameDir' => 'required',
//            'nameDir' => 'required',
//            'patronymicDir' => 'required',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
        ]);
        $organiz = Organization::add($request->all());
        $organiz->director()->createMany(Director::add($request->Director));
        $organiz->responsible()->createMany(Responsible::add($request->Responsible));
        $organiz->teachers()->createMany(Teachers::add($request->Teacher));
        $organiz->museums()->createMany(Museums::add($request->Museum));
        $organiz->cabinets()->createMany(Cabinets::add($request->Cabinets));
        $organiz->others()->createMany(Others::add($request->Others));
        $organiz->subjectStudy()->createMany(SubjectStudy::add($request->Subject));
        $organiz->book()->createMany(Book::add($request->Book));
        $organiz->methodolog()->createMany(Methodolog::add($request->Methodolog));
        $organiz->openClassroom()->createMany(OpenClassroom::add($request->openClassroom));
        $organiz->society()->createMany(Society::add($request->Society));
        $organiz->collective()->createMany(Collective::add($request->Collective));
        $organiz->event()->createMany(Event::add($request->Event));
        $organiz->additionalInfo()->createMany(AdditionalInfo::add($request->additionalInfo));
        return redirect()->route('list', $organiz);
    }

    public function edit($id)
    {
        $org = Organization::find($id);
        return view('edit', compact('org'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nameOrganization' => 'required',
//            'surnameDir' => 'required',
//            'nameDir' => 'required',
//            'patronymicDir' => 'required',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
        ]);

        $organiz = Organization::find($id);
        $organiz->edit($request->all());
        $organiz->director()->delete();
        $organiz->director()->createMany(Director::add($request->Director));
        $organiz->responsible()->delete();
        $organiz->responsible()->createMany(Responsible::add($request->Responsible));
        $organiz->teachers()->delete();
        $organiz->teachers()->createMany(Teachers::add($request->Teacher));
        $organiz->museums()->delete();
        $organiz->museums()->createMany(Museums::add($request->Museum));
        $organiz->cabinets()->delete();
        $organiz->cabinets()->createMany(Cabinets::add($request->Cabinets));
        $organiz->others()->delete();
        $organiz->others()->createMany(Others::add($request->Others));
        $organiz->subjectStudy()->delete();
        $organiz->subjectStudy()->createMany(SubjectStudy::add($request->Subject));
        $organiz->book()->delete();
        $organiz->book()->createMany(Book::add($request->Book));
        $organiz->methodolog()->delete();
        $organiz->methodolog()->createMany(Methodolog::add($request->Methodolog));
        $organiz->openClassroom()->delete();
        $organiz->openClassroom()->createMany(OpenClassroom::add($request->openClassroom));
        $organiz->society()->delete();
        $organiz->society()->createMany(Society::add($request->Society));
        $organiz->collective()->delete();
        $organiz->collective()->createMany(Collective::add($request->Collective));
        $organiz->event()->delete();
        $organiz->event()->createMany(Event::add($request->Event));
        $organiz->additionalInfo()->delete();
        $organiz->additionalInfo()->createMany(AdditionalInfo::add($request->additionalInfo));
        return redirect()->route('list', $organiz);
    }

    public function destroy($id)
    {
        $organiz = Organization::find($id);
        $organiz->director()->delete();
        $organiz->responsible()->delete();
        $organiz->teachers()->delete();
        $organiz->museums()->delete();
        $organiz->cabinets()->delete();
        $organiz->others()->delete();
        $organiz->subjectStudy()->delete();
        $organiz->book()->delete();
        $organiz->methodolog()->delete();
        $organiz->openClassroom()->delete();
        $organiz->society()->delete();
        $organiz->collective()->delete();
        $organiz->event()->delete();
        $organiz->additionalInfo()->delete();
        $organiz->remove();
        return redirect()->route('list');
    }
}

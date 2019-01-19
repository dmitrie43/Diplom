@extends('adminlte::page')

@section('title', 'AdminPanel')

@section('content')
    <section class="content">
        {{ Form::open([
            'route' => ['update', $list->id],
            'method' => 'put'
        ]) }}

        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Обновляем организацию</h2>
                @include('errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Наименование образовательной организации(обязательно)</label>
                        <input name="nameOrganization" value="{{ $list->nameOrganization }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ФИО директора образовательной организации(обязательно)</label>
                        <input name="fullNameDirector" value="{{ $list->fullNameDirector }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ФИО лица, ответственного в образовательной организации за этнокультурную
                            составляющую образовательного процесса (рабочий телефон (с кодом) _8()_)</label>
                        <input name="fullNameResponsible" value="{{ $list->fullNameResponsible }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Статус образовательной организации</label>
                        <input name="statusOrganization" value="{{ $list->statusOrganization }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Номер документа, подтверждающий наличие статуса</label>
                        <input name="numberDocumentation" value="{{ $list->numberDocumentation }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <h3>Сведения о наличии:</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Учителей родного языка(мордовского), их ФИО</label>
                        <input name="fullNameTeachers" value="{{ $list->fullNameTeachers }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Музея с экспозициями, посвященными истории, культуре и быту мордовского народа</label>
                        <input name="museums" value="{{ $list->museums }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Кабинета по изучению родного(мордовского языка)</label>
                        <input name="cabinets" value="{{ $list->cabinets }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Иное</label>
                        <textarea name="others" type="text" class="form-control" id="exampleInputEmail1" placeholder="">{{ $list->others }}</textarea>
                    </div>
                    <h3>Указать, есть ли в образовательной деятельности следующее:</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Предмет по изучению родного (мордовского) языка: название предмета, уровень образования
                            (дошкольное, начальное, основное, среднее)</label>
                        <input name="subjectStudyLang" value="{{ $list->subjectStudyLang }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Учебники по изучению родного (мордовского) языка: автор, название, издательство, год выпуска</label>
                        <input name="bookLang" value="{{ $list->bookLang }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Методическое обеспечение по изучению родного (мордовского) языка: автор, название, издательство, год выпуска</label>
                        <input name="methodologicalSupportLang" value="{{ $list->methodologicalSupportLang }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Факультатив по изучению родного (мордовского) языка: название, класс</label>
                        <input name="openClassroomLang" value="{{ $list->openClassroomLang }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Кружки по изучению родного (мордовского) языка: название, класс</label>
                        <input name="societyLang" value="{{ $list->societyLang }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Коллективы (танцевальные, песенные, иные) связанные с изучением
                            родного (мордовского) языка, его истории и культуры: автор, название, возраст детей</label>
                        <input name="collectivesLang" value="{{ $list->collectivesLang }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <h3>Какие мероприятия по изучению и сохранению мордовской культуры и традиций проводятся в образовательной организации:</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Уровень (международный, всероссийский, областной, муниципальный, школьный)</label>
                        <textarea name="eventCultureLevel" type="text" class="form-control" id="exampleInputEmail1" placeholder="">{{ $list->eventCultureLevel }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Форма (конкурс, фестиваль, конференции и др)</label>
                        <textarea name="eventCultureForm" type="text" class="form-control" id="exampleInputEmail1" placeholder="">{{ $list->eventCultureForm }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
                        <textarea name="eventCultureName" type="text" class="form-control" id="exampleInputEmail1" placeholder="">{{ $list->eventCultureName }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Время проведения</label>
                        <textarea name="eventCultureTime" type="time" class="form-control" id="exampleInputEmail1" placeholder="">{{ $list->eventCultureTime }}</textarea>
                    </div>
                    <h3>Дополнительная информация:</h3>
                    <div class="form-group">
                        <textarea name="additionalInfo" type="text" class="form-control" id="exampleInputEmail1" placeholder="">{{ $list->additionalInfo }}</textarea>
                    </div>
                {{--<div class="form-group">--}}
                {{--<label>Теги</label>--}}
                {{--{{Form::select('tags[]',--}}
                {{--$tags,--}}
                {{--null,--}}
                {{--['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Выберите теги'])}}--}}
                {{--</div>--}}
                <!-- Date -->
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('list')}}" class="btn btn-default">Отменить</a>
                <button class="btn btn-success pull-right">Обновить</button>
            </div>
            <!-- /.box-footer-->
        </div>

        {{ Form::close() }}
    </section>
@stop
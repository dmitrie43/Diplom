@extends('adminlte::page')

@section('title', 'AdminPanel')

@section('content')
    <section class="content">
        {{ Form::open([
            'route' => ['update', $org->id],
            'method' => 'put'
        ]) }}

        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Изменяем организацию</h2>
                @include('errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Наименование образовательной организации(обязательно)</label>
                        <input name="nameOrganization"2 value="{{ $org->nameOrganization }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите координаты организации (долгота)</label>
                        <input name="longitude" value="{{ $org->longitude }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Формат: 54.205973">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите координаты организации (широта)</label>
                        <input name="latitude" value="{{ $org->latitude }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Формат: 49.6033793">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Фамилия директора образовательной организации</label>
                        <input name="Director[]" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя директора</label>
                        <input name="Director[]" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Отчество директора</label>
                        <input name="Director[]" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Фамилия лица, ответственного в образовательной организации за этнокультурную
                            составляющую образовательного процесса</label>
                        <input name="Responsible[]" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя ответственного</label>
                        <input name="Responsible[]" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Отчество ответственного</label>
                        <input name="Responsible[]" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Номер телефона ответственного</label>
                        <input name="Responsible[]" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Статус образовательной организации</label>
                        <input name="statusOrganization" value="{{ $org->statusOrganization }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Номер документа, подтверждающий наличие статуса</label>
                        <input name="numberDocumentation" value="{{ $org->numberDocumentation }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <h3>Сведения о наличии:</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Укажите учителей родного (мордовского) языка, их ФИО</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Teacher[]" size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Teacher[]" size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Teacher[]" size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                        {{--{{ Form::open() }}--}}
                        {{--<p>--}}
                        {{--<input class="countTeachers" type="number" name="rows" max="10" min="1" style="width: 100px">--}}
                        {{--<input type="button" name="create-teachers" value="Показать" class="btn btn-default create-teachers">--}}
                        {{--</p>--}}
                        {{--{{ Form::close() }}--}}
                        {{--{{ Form::open([--}}
                        {{--'route' => 'store'--}}
                        {{--]) }}--}}
                        {{--{{ Form::close() }}--}}
                        {{--{{ Form::open([--}}
                        {{--'route' => 'store2'--}}
                        {{--]) }}--}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Названия музеев с экспозициями, посвященными истории,
                            культура и быту мордовского народа</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Описание</th>
                            <th>Экспозиции</th>
                            <th>Руководитель</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Museum[]" size="40">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Museum[]" size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Museum[]" size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Кабинет по изучению родного (мордовского) языка</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Информация о кабинете</th>
                            <th>Руководитель</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Cabinets[]" size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Cabinets[]" size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Иное</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Что именно?</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <textarea type="text" placeholder="" name="Others[]" style="width: 400px; height: 30px"></textarea>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <h3>Указать, есть ли в образовательной деятельности следующее:</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Предмет по изучению родного (мордовского) языка: название предмета, уровень образования
                            (дошкольное, начальное, основное, среднее)</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Название</th>
                            <th>Уровень</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Subject[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Subject[]"  size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Учебники по изучению родного (мордовского) языка: автор, название, издательство, год выпуска</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Автор</th>
                            <th>Название</th>
                            <th>Издательство</th>
                            <th>Год выпуска</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Book[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Book[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Book[]"  size="20">
                                </td>
                                <td>
                                    <input type="number" placeholder="" name="Book[]"  size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Методическое обеспечение по изучению родного (мордовского) языка: автор, название, издательство, год выпуска</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Автор</th>
                            <th>Название</th>
                            <th>Издательство</th>
                            <th>Год выпуска</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Methodolog[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Methodolog[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Methodolog[]"  size="20">
                                </td>
                                <td>
                                    <input type="number" placeholder="" name="Methodolog[]"  size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Факультатив по изучению родного (мордовского) языка: название, класс</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Описание</th>
                            <th>Класс</th>
                            <th>Руководитель</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="openClassroom[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="openClassroom[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="openClassroom[]"  size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Кружки по изучению родного (мордовского) языка: название, класс</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Название</th>
                            <th>Класс</th>
                            <th>Руководитель</th>
                            <th>Описание</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Society[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Society[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Society[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Society[]"  size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Коллективы (танцевальные, песенные, иные) связанные с изучением
                            родного (мордовского) языка, его истории и культуры: автор, название, возраст детей</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Руководитель</th>
                            <th>Название</th>
                            <th>Возраст детей</th>
                            <th>Описание</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Collective[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Collective[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Collective[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Collective[]"  size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <h3>Какие мероприятия по изучению и сохранению мордовской культуры и традиций проводятся в образовательной организации:</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Уровень (международный, всероссийский, областной, муниципальный, школьный),<br>
                            Форма (конкурс, фестиваль, конференции и др), <br>
                            Название, <br>
                            Время проведения</label>
                        <table class="table-check tc tc2">
                            <thead>
                            <th>№</th>
                            <th>Уровень</th>
                            <th>Форма</th>
                            <th>Название</th>
                            <th>Время</th>
                            </thead>
                            <tbody>
                            <tr class="teach">
                                <td class="myIdElement">1</td>
                                <td>
                                    <input type="text" placeholder="" name="Event[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Event[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Event[]"  size="20">
                                </td>
                                <td>
                                    <input type="text" placeholder="" name="Event[]"  size="20">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="addNewStr">Добавить ещё</button>
                    </div>
                    <h3>Дополнительная информация:</h3>
                    <div class="form-group">
                        <textarea name="additionalInfo" type="text" class="form-control" id="exampleInputEmail1" placeholder=""></textarea>
                    </div>
                    <!-- Date -->
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('list')}}" class="btn btn-default">Отменить</a>
                <button class="btn btn-success pull-right">Добавить</button>
            </div>
            <!-- /.box-footer-->
        </div>
        {{ Form::close() }}
    </section>
    <script src="{{ asset('js/zzz.js') }}"></script>
@stop
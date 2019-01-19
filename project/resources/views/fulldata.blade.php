@extends('adminlte::page')

@section('title', 'AdminPanel')

@section('content')
    <style>
        .table_blur {
            background: #f5ffff;
            border-collapse: collapse;
            text-align: left;
        }
        .table_blur th {
            border-top: 1px solid #777777;
            border-bottom: 1px solid #777777;
            box-shadow: inset 0 1px 0 #999999, inset 0 -1px 0 #999999;
            background: linear-gradient(#9595b6, #5a567f);
            color: white;
            padding: 10px 15px;
            position: relative;
        }
        .table_blur th:after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            top: 25%;
            height: 25%;
            width: 100%;
            background: linear-gradient(rgba(255, 255, 255, 0), rgba(255,255,255,.08));
        }
        .table_blur tr:nth-child(odd) {
            background: #ebf3f9;
        }
        .table_blur th:first-child {
            border-left: 1px solid #777777;
            border-bottom:  1px solid #777777;
            box-shadow: inset 1px 1px 0 #999999, inset 0 -1px 0 #999999;
        }
        .table_blur th:last-child {
            border-right: 1px solid #777777;
            border-bottom:  1px solid #777777;
            box-shadow: inset -1px 1px 0 #999999, inset 0 -1px 0 #999999;
        }
        .table_blur td {
            border: 1px solid #e3eef7;
            padding: 10px 15px;
            position: relative;
            transition: all 0.5s ease;
        }
    </style>
    <section class="content">
        <table id="example1" class="table_blur">
            @foreach($org as $elem)
                <tr>
                    <th>Наименование организации</th>
                    <td>{{ $elem->nameOrganization }}</td>
                </tr>
                <tr>
                    <th>Координаты (Д, Ш)</th>
                    <td>{{ $elem->longitude }}</td>
                    <td>{{ $elem->latitude }}</td>
                </tr>
                <tr>
                    <th>Статус организации</th>
                    <td>{{ $elem->statusOrganization }}</td>
                </tr>
                <tr>
                    <th>Номер документа</th>
                    <td>{{ $elem->numberDocumentation }}</td>
                </tr>
                <tr>
                    <th>Номер документа</th>
                    <td>{{ $elem->numberDocumentation }}</td>
                </tr>
            @endforeach
        </table>
    </section>
@stop





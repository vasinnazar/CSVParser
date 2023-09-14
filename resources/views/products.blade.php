@extends('layout')
@section('content')
    <h1>Товары</h1>
    <table>
        <tr>
            <th>Код</th>
            <th>Наименование</th>
            <th>Уровень1</th>
            <th>Уровень2</th>
            <th>Уровень3</th>
            <th>Цена</th>
            <th>ЦенаСП</th>
            <th>Количество</th>
            <th>Поля свойств</th>
            <th>Совместные покупки</th>
            <th>Единица измерения</th>
            <th>Картинка</th>
            <th>Выводить на главной</th>
            <th>Описание</th>
        </tr>
        @foreach($products as $key => $product)
            <tr>
                <td>{{$product['code']}}</td>
                <td>{{$product['naming']}}</td>
                <td>{{$product['level1']}}</td>
                <td>{{$product['level2']}}</td>
                <td>{{$product['level3']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['sp_price']}}</td>
                <td>{{$product['quantity']}}</td>
                <td>{{$product['property_fields']}}</td>
                <td>{{$product['joint_purchases']}}</td>
                <td>{{$product['measure_unit']}}</td>
                <td>{{$product['image']}}</td>
                <td>{{$product['main_page_display']}}</td>
                <td>{{$product['description']}}</td>
            </tr>
        @endforeach
    </table>
@stop

@extends('template.layout')
@section('content')
<form action="{{route('cars.store')}}" method="POST" style="margin:80px" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="car" id="" placeholder="Car"><hr>
    <input type="file" name="photo" id=""><hr>
    <input type="text" name="desc1" id="" placeholder="desc1"><hr>
    <input type="text" name="desc2" id="" placeholder="desc2"><hr>
    <input type="text" name="desc3" id="" placeholder="desc3"><hr>
    <input type="text" name="desc4" id="" placeholder="desc4"><hr>
    <select name="category" id="">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select><hr>
    <input type="text" name="motor_type" id="" placeholder="Motor type"><hr>
    <select name="gearshift" id="">
        <option value="1">Handmatige</option>
        <option value="2">Automaat</option>
    </select><hr>
    <select name="benzine" id="">
    <option value="Benzine">Benzine</option>
        <option value="Diesel">Diesel</option>
        <option value="Hybrid benzine">Hybrid benzine</option>
        <option value="Hybride diesel">Hybride diesel</option>
        <option value="Elektriesch">Elektriesch</option>
    </select>
    <hr>
    <input type="text" name="price" id="" placeholder="Price">

    <input type="submit" value="Create">
</form>
@endsection


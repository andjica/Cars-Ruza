@extends('template.layout')
@section('content')
<div class="container">
    <div class="row" style="margin-top:100px;">

     <div class="col-md-4 bg-dark rounded">
    @include('components.sidebar')
    </div>

    <div class="col-md-8">
  
<!--Novaa forma -->
<form action="{{asset('/cars/'.$car->id)}}" method="POST" style="margin:80px" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ method_field('PATCH') }}
    <h3 class="text-secondary">Ad your carsss</h3>
        <select class="custom-select custom-select-lg mb-3" name="category">
            @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Name of your car</label>
        <input type="text" name="car" class="form-control" id="" placeholder="Opel corsa" value="{{$car->car}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Description 1</label>
        <input type="text" name="desc1" class="form-control" id="" placeholder="Set description" value="{{$car->desc1}}">
    </div>
    <form>
    <div class="form-group">
        <label for="formGroupExampleInput">Description 2</label>
        <input type="text" name="desc2" class="form-control" id="" placeholder="Set description" value="{{$car->desc2}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Description 3</label>
        <input type="text" name="desc3" class="form-control" id="" placeholder="Set description" value="{{$car->desc3}}">
    </div>


    <div class="form-group">
        <label for="formGroupExampleInput">Description 4</label>
        <input type="text" name="desc4" class="form-control" id="" placeholder="Set description" value="{{$car->desc4}}">
    </div>

    <div class="form-group">
    <div class="custom-file">
        <input type="file" name="photo" class="custom-file-input" id="">
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2"></label>
    <select name="benzine" id="" class="custom-select custom-select-lg mb-3">
        <option value="Benzine">Benzine</option>
            <option value="Diesel">Diesel</option>
            <option value="Hybrid benzine">Hybrid benzine</option>
            <option value="Hybride diesel">Hybride diesel</option>
            <option value="Elektriesch">Elektriesch</option>
        </select>
        </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Motor Type</label>
        <input type="text" name="motor_type" class="form-control" id="" placeholder="Motor type" value="{{$car->motor->type}}">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2"></label>
    <select name="gearshift" id="" class="custom-select custom-select-lg mb-3">
            <option value="1">Handmatige</option>
            <option value="2">Automaat</option>
        </select>
        </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Set price of your car</label>
        <input type="text" name="cost" class="form-control" id="" placeholder="Set price of your car" value="{{$car->cost}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

    </div>

@endsection


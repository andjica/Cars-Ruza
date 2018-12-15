@extends('template.layout')

@section('content')
<!-- Page Content -->

<div class="container">

<h1>Sortirana</h1>
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

<div class="sorted">
    
</div>
</div>
@endsection


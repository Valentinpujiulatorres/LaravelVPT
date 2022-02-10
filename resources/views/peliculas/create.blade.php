@extends('peliculas.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Film</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('peliculas.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-warning">
        <strong>ALERT!</strong> Debes especificar los siguientes campos <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('peliculas.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre</strong>
                <input type="text" name="nombre" class="form-control" placeholder="nombre" value="{{old('nombre')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>saga</strong>
                <input type="text" name="saga" class="form-control" placeholder="saga" value="{{old('saga')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lanzamiento</strong>
                <input type="date" name="lanzamiento" class="form-controll" value="{{old('lanzamiento')}}">
                <!-- <input type="text" name="lanzamiento" class="form-control" placeholder="YY-MM-DD" value="{{old('lanzamiento')}}"> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CALIFICACION</strong><br>

                <select class="form-control" aria-label="Default select example" name="calificacion" id="calificacion" value="+18">
                    <option value="+18">+18</option>
                    <option value="+16">+16</option>
                    <option value="11">11</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>En emision?</strong><br>
                <div>
                <input  @if(old('emision')=='true')) checked @endif type="checkbox" name="emision" class="form-check" value="1">YES
                <input @if(old('emision')=='false')) checked @endif type="checkbox" name="emision" class="form-check" value="0">NO
                    
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopsis</strong>
                <textarea name="sinopsis" id="sinopsis" class="form-control" placeholder="Sinopsis Here:" value="{{old('sinopsis')}}">{{old('sinopsis')}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection
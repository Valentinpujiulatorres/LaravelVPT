@extends('peliculas.layout')

@section('content')

<head>
    <style>
        .tds {
            background-color: #F5F5DC;
        }
    </style>

</head >
    <div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">FILMOTECA</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('peliculas.create') }}"> Create New Record</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered border-success">
        <tr class="tds">
            <th>No</th>
            <th>Name</th>
            <th>saga</th>
            <th>Lanzamiento</th>
            <th>Rating</th>
            <th>En Emision</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($peliculas as $pelicula)
        
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pelicula->nombre }}</td>
            <td>{{ $pelicula->saga }}</td>
            <td>{{ $pelicula->lanzamiento}}</td>
            <td>{{$pelicula->calificacion}}</td>
            <td>{{$pelicula->emision ? 'true' : 'false'}}</td>
            <td>

                <form action="{{ route('peliculas.destroy',$pelicula->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('peliculas.show',$pelicula->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('peliculas.edit',$pelicula->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    @can('isAdmin')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @else
                    <button type="submit" class="btn btn-danger" disabled>Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
</table>

{!! $peliculas->links() !!}

@endsection
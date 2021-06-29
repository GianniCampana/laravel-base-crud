@extends('layout.main')

@section('content')


<div class="container mt-5">

<h1>I MIEI COMICS</h1>

<section>
    <table class="table">

        <thead>
            <tr>
                <th>ID</th>
                <th>title</th>
                <th>type</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($comics as $comic )

                <tr>
                    <td>
                        {{$comic->id}}
                    </td>
                    <td>
                        {{$comic->title}}
                    </td>
                    <td>
                        {{$comic->type}}
                    </td>
                    <td>
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-success">SHOW</a>
                    </td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</section>

</div>
    
@endsection
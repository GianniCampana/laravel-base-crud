@extends('layout.main')

@section('content')


<section class="container mt-5">

<h1>{{$comic->title}} <a href="{{route('comics.edit', $comic)}}" class="btn btn-primary">EDIT</a></h1>
<h3>{{$comic->type}}</h3>
<p>{{$comic->description}}</p>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}">

    

</section>

<section class="container">
    <a href="{{route('comics.index')}}">BACK</a>
</section>
    
@endsection
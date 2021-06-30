@extends('layout.main')

@section('content')


<section class="container mt-5">

<h1>
    <a href="{{route('comics.show', $comic)}}">{{$comic->title}}</a>
</h1>
<div class="row col-8 offset-2">
    <form action="{{ route('comics.update', $comic) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="title" class="form-lable">TITLE COMIC</label>
            <input type="text" id="title" name="title" class="form-control" value="{{$comic->title}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-lable">DESCRIPTION COMIC</label>
            <textarea name="description" id="description" class="form-control" rows="6">{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-lable">TYPE COMIC</label>
            <select name="type" id="type">

                <option value="comic-book" @if ($comic->type === 'comic-book') selected @endif>comic-book</option>
                <option value="graphic-novel" @if ($comic->type === 'graphic-novel') selected @endif>graphic-novel</option>

            </select>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-lable">IMMAGINE</label>
            <input type="text" id="thumb" name="thumb" class="form-control" value="{{$comic->thumb}}">
        </div>

        <button type="submit" class="btn btn-primary">INVIA</button>
        <button type="reset" class="btn btn-secondary">RESET</button>

        

    </form>
</div>
    

</section>
    
@endsection
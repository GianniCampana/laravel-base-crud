@extends('layout.main')

@section('content')


<section class="container mt-5">

<h1>CREATE</h1>
<div class="row col-8 offset-2">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="mb-3">
            <label for="title" class="form-lable">TITLE COMIC</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-lable">DESCRIPTION COMIC</label>
            <textarea name="description" id="description" class="form-control" rows="6"></textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-lable">TYPE COMIC</label>
            <select name="type" id="type">

                <option value="comic-book">comic-book</option>
                <option value="graphic-novel">graphic-novel</option>

            </select>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-lable">IMMAGINE</label>
            <input type="text" id="thumb" name="thumb" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">INVIA</button>
        <button type="reset" class="btn btn-secondary">RESET</button>

        

    </form>
</div>
    

</section>
    
@endsection
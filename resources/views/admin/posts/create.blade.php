@extends('layouts.app')

@section('content')
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
            <small id="titleHelp" class="form-text text-muted">Inserici qui il titolo del tuo post</small>
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Link dell'immagine</label>
            <input type="text" class="form-control" id="image" name="image">
            <small id="imageHelp" class="form-text text-muted">Inserici qui il link dell'immagine</small>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Conferma</button>
        </div>
    </form>
@endsection
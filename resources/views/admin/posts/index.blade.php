@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Header --}}
    <header>
        <h1>Tutti i Post</h1>
    </header>
    {{-- Table --}}
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">slug</th>
            <th scope="col">Creato il</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->created_at}}</td>
                <td class="d-flex justify-content-end align-items-center">
                    Actions
                </td>
              </tr>
              @empty
                <tr>
                    <td colsapn=""><h3>Non vi sono posts disponibili</h3> </td>
                </tr>
            @endforelse
        </tbody>
      </table>
</div>
@endsection
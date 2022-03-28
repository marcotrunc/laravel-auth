@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Header --}}
    <header class="d-flex justify-content-between">
        <h1>Tutti i Post</h1>
        <div>
          <a href="{{route('admin.posts.create')}}" class="btn btn-success d-flex align-content-center">Aggiungi</a>
        </div>
    </header>
    {{-- Table --}}
    <table class="table table-dark mt-4">
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
                <form action="{{route('admin.posts.destroy',$post->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
                </td>
              </tr>
              @empty
                <tr>
                    <td colspan=""><h3>Non vi sono posts disponibili</h3> </td>
                </tr>
            @endforelse
        </tbody>
      </table>
</div>
@endsection
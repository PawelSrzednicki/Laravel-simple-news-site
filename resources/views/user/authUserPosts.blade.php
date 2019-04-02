@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>My News </h1>
    @foreach ($data as $news)
    <div class="card" style="width: 28rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $news->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">by:<a href="{{ route( 'news.byAuthor', [ 'user'=> $news->author]) }}">{{ $news->author }}</a> in <a href="{{ route( 'category.show', [ 'category'=> $news->categories->id]) }}">{{ $news->categories->name }}</a></h6>
            <hr />
            <p class="card-text">{{ $news->description }}</p>
            <a href="{{ route('news.show', ['news' => $news->id])}}" class="btn btn-primary">Read more</a>
            <a href="{{ route('news.edit', ['news' => $news->id])}}" class="btn btn-primary">Edit</a>
            <form action="{{ route('news.destroy', $news->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
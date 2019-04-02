@extends('layouts.app') 
@section('content')
<div class="container">
    @foreach ($data as $news)
    <div class="card" style="width: 28rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $news->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">by:<a href="{{ route( 'news.byAuthor', [ 'user'=> $news->author]) }}">{{ $news->author }}</a> in <a href="{{ route( 'category.show', [ 'category'=> $news->categories->id]) }}">{{ $news->categories->name }}</a></h6>
            <hr />
            <p class="card-text">{{ $news->description }}</p>
            <a href="{{ route('news.show', ['news' => $news->id])}}" class="btn btn-primary">Read more</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
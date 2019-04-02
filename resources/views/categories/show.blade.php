@extends('layouts.app') 
@section('content')
<div class="container">
    @foreach ($data as $item)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">by:<a href="{{ route( 'news.byAuthor', [ 'user'=> $item->author]) }}">{{ $item->author }}</a></h6>
            <p class="card-text">{{ $item->description }}</p>
            <a href="{{ route('news.show', ['news' => $item->id])}}" class="btn btn-primary">Read more</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
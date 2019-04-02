@extends('layouts.app') 
@section('content')
<div class="container">


    {{ $data->title }} {{ $data->author }} {{ $data->description }} {{ $data->categories->name }}"

    <form action="{{ route('news.destroy', $data->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
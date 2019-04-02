@extends('layouts.app') 
@section('content')
<div class="container">
    <form method="post" action="{{ route('news.update', $data->id) }}">
        @method('PATCH') @csrf

        <div class="form-group">
            <label for="title">Add Title</label>
            <input type="text" class="form-control" id="title" value="{{ $data->title }}" name="title">
        </div>

        <div class="form-group">
            <label>Add Content</label>
            <textarea class="form-control" name="description">{{ $data->description }}</textarea>
        </div>

        <div class="form-group">
            <label class="col control-label"> Select categorie </label>
            <div class="col">
                <select class="form-control" name="categorie" value="{{ $data->categories->name }}">
                   @foreach ($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                   @endforeach     
                </select>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>
@endsection
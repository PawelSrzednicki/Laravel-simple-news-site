@extends('layouts.app') 
@section('content')
<div class="container">
    <form method="POST" action="{{ route('news.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Add Title" name="title">
        </div>

        <div class="form-group">
            <label>Add Content</label>
            <textarea class="form-control" name="description"></textarea>
        </div>

        <div class="form-group">
            <label class="col control-label"> Select categorie </label>
            <div class="col">
                <select class="form-control" name="categorie">
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
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
@extends('layouts.app')
 
@section('content')

<h2>Edit Page! </h2>
    <hr>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="PUT" action="{{ route('pages.update', $page->id) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Page Title</label>
            <input type="text" name="name" value="{{ $page->name }}" class="form-control" placeholder="Post Title">
        </div>
        <div class="form-group">
            <label>page Content</label>
            <textarea name="description" rows="4" class="form-control">{{ $page->description }}</textarea>
        </div>
        <div class="form-group">
            <label>page Content</label>
            <textarea name="content" rows="4" class="form-control">{{ $page->content }}</textarea>
        </div>
        <a href="{{ route('pages.index') }}" class="btn btn-default">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 
@stop
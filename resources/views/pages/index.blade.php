@extends('layouts.app')
 
@section('content')
    <div class="row">
        <a href="{{ route('pages.create') }}" class="btn btn-success pull-right">Create Page</a>
    </div>
    <br>
    @if (Session::get('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
 
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>Description</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pages as $key => $page)
                <tr>
                    
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->name }}</td>
                    <td>{{ $page->description }}</td>
                    <td style="width: 10%">
                        <a href="{{ route('pages.show', $page->id) }}" class="btn btn-success" style="margin-bottom: 10px; width: 70px;">View</a><br>
                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-info" style="margin-bottom: 10px; width: 70px;">Edit</a>
 
                        <form action="{{ route('pages.destroy', [$page->id]) }}" method="POST">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                           <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $pages->links() !!}
 
    </div>
 
@stop
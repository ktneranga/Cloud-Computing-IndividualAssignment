@extends('layouts.app')

@section('content')
    <div class="row p-3 bg-light">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Posts</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('create') }}" class="btn btn-outline-primary btn-sm me-2 float-end">Create Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @if ($msg = Session::get('add'))
            <div class="alert alert-success">{{ $msg }}</div>
        @endif
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts ?? '' as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['text'] }}</td>
                    <td>{{ $post['author'] }}</td>
                    <td>{{ $post['created_at'] }}</td>
                    <td class="text-center">
                        <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
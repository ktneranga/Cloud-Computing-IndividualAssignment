@extends('layouts.app')

@section('content')
<div class="row p-3 bg-light">
    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Create Post</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('index') }}" class="btn btn-outline-primary btn-sm me-2 float-end">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card p-3">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Post Title</label>
                <input type="text" class="form-control" placeholder="title" name="title">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Author</label>
                <input type="text" class="form-control" placeholder="Author" name="author">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="text"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
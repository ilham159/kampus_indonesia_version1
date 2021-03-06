@extends('layouts.sb-admin')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tag</h1>
<p class="mb-4">This page for edit tag</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit tag <strong>{{ $tag->tag }}</strong></h6>
    </div>
    <div class="card-body">
        <form action="{{ route('tag.update', ['id' => $tag->id])}}" method="post">
            {{ csrf_field()}}
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">
            </div>
            <div class="from-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@extends('layouts.sb-admin')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Post</h1>
<p class="mb-4">This page for admin to post</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title}}</td>
                        <td>{{ $post->category->name}}</td>
                        <td>
                            <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}" width="90px" height="50px">
                        </td>
                        <td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-info">Edit</a></td>
                        <td><a href="{{ route('post.trash', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">Trash</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
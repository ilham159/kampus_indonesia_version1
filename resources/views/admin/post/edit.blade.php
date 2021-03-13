@extends('layouts.sb-admin')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Post</h1>
<p class="mb-4">This page for edit post</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit post</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title }}">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" class="form-control  @error('category_id') is-invalid @enderror" value="{{ $post->category_id }}">
                    @foreach($categories as $category)
                    @if($post->category_id == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
                @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tag">Select a Tag</label>
                @foreach($tags as $tag)
                <div class="checbox">
                    <label form="tag"><input type="checkbox" name="tag[]" value="{{ $tag->id }}" @foreach($post->tags as $t)
                        @if ($t->id == $tag->id)
                        checked
                        @endif
                        @endforeach >
                        {{ $tag->tag }}
                    </label>
                </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="editor" name="content" class="form-control @error('content') is-invalid @enderror">{{ $post->content }}</textarea>
                @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="featured">Image</label>
                <input type="file" name="featured" class="form-control">
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
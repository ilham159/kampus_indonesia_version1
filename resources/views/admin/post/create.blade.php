@extends('layouts.sb-admin')

@section('content')
<div class="card">
    <div class="card-header">
        Create a new post
    </div>

    <div class="card-body">
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="featured">Featured image</label>
                <input type="file" name="featured" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                    <label form="tag"><input type="checkbox" name="tag[]" value="{{ $tag->id }}">{{ $tag->tag}}</label>
                </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="editor" name="content" cols="5" rows="5" id="textcontent" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Store post
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
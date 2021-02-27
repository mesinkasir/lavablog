@extends('admin.layouts.master')
@include('admin.layouts.sidebar')
@section('title', $post->title)
@section('title')
@section('content')
    <div id="content">
        @include('admin.layouts.topbar')
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.posts.update', $post->id) }}"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Description</label>
                            <input type="text" name="subtitle" class="form-control" value="{{ $post->subtitle }}">
                        </div>
                        <div class="form-group col-6">
                            @if ($post->image)
                                <a href="{{ asset($post->image) }}" traget="_blank">
                                    <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-responsive"
                                        style="width: 200px;">
                                </a>
                            @endif
                            <br> <br>
                            <input type="file" name="image" class="form-control" value="{{ asset($post->image) }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option @if ($post->status === 'publish') selected @endif value="publish">Publish</option>
                                <option @if ($post->status === 'draft') selected @endif value="draft">Draft</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Content</label>
                            <textarea name="description" class="form-control"
                                rows="4">{{ $post->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-danger btn-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        
    </div>
@endsection

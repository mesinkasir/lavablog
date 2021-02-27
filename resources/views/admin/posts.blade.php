@extends('admin.layouts.master')
@include('admin.layouts.sidebar')
@section('title', 'Blog Post')
@section('content')
    @include('admin.layouts.topbar')
    <div class="container-fluid">

        @if (Session::has('success'))
        @endif

        <div class="mb-4 shadow card">
            <div class="py-3 card-header">
                <h6 class="float-right m-0 font-weight-bold text-primary">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-danger rounded-pill">
                        <i class="fa fa-plus"></i>
                       New Post
                    </a>
                </h6>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->subtitle }}</td>
                                 
                                    <td>
                                        @if ($post->status == 'publish')
                                            <span class="badge badge-danger">Publish</span>
                                        @elseif($post->status == 'draft')
                                            <span class="badge badge-dark">Draft</span>
                                        @endif
                                    </td>
                                    <td @if ($post->author != Auth::user()) style="display: none;" @endif>
                                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-danger"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('admin.posts.destroy', $post->id) }}" class="btn btn-dark"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@extends('admin.layouts.master')
@include('admin.layouts.sidebar')
@section('title', 'New Post')
@section('title')
@section('subtitle')
@section('content')
    <!-- Main Content -->
    <div id="content">

        @include('admin.layouts.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Description</label>
                            <input type="text" name="subtitle" class="form-control">
                            <div class=" form-group col-6">
                                <label for="image">Cover Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description">Content</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-danger btn-lg">Save Post</button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection

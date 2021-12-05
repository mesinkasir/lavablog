@extends('admin.layouts.master')
@include('admin.layouts.sidebar')
@section('title', 'Laravel Blogs')
@section('content')
    <div id="content">
        @include('admin.layouts.topbar')
        @if (Session::has('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
            </div>
        @endif
@include('errors.200')
    </div>
@endsection

@extends('admin.layouts.master')
@include('admin.layouts.sidebar')
@section('title', 'Documentation')
@section('content')
    @include('admin.layouts.topbar')
    <div class="container-fluid">
        @if (Session::has('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
            </div>
        @endif
@include('errors.300')
        </div>

@endsection

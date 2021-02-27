@extends('layouts.master')
@section('title', '$post->title')
@section('banner')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset($post->image) }})">
           <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-8 col-md-10">
                    <div class="post-heading">
					<div class="bg-danger p-3 p-md-5 shadow rounded" style="opacity: 0.8;">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->subtitle }}</h2>
                        <span class="meta">
                          Authors <a href="#">{{ $post->author->name }}</a>
                     Update
                            {{ $post->created_at->diffForHumans() }}
                            </span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
   
    <article>
        <div class="container">
            <div class="row">
			<div class="mx-auto col-2 col-md-1 p-3">
                <ul class="text-center list-inline">
					  <li class="list-inline-item">
                        <a href="https://www.youtube.com/c/bakoelraksupermarketMesinKasir/videos" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x text-danger"></i>
                                <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
					<li class="list-inline-item">
                        <a href="https://fb.com/mesinkasircomplete" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://mesinkasironline.web.app" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x text-info"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://mesinkasir.github.io" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
                <div class="mx-auto col-10 col-md-8 p-3">
                    {{ $post->description }}
                </div>
            </div>
        </div>
    </article>
@endsection

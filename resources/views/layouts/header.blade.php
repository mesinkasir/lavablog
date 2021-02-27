<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><title>{{ $post->title }}</title><meta name="description" content="{{ $post->subtitle }}"><meta content='https://www.hockeycomputindo.com' property='og:author'/><meta content='{{ $post->title }}' name='facebook:title'/><meta content='website' property='og:type'/><meta content='https://www.facebook.com/mesinkasircomplete' property='facebook:author'/><meta content='{{ $post->image }}' name='facebook:image'/><meta content='{{ $post->title }}' property='og:site_name'/><meta content='{{ $post->subtitle }}' property='facebook:description'/><meta content='summary_large_image' name='twitter:card'/><meta content='https://twitter.com/hockeycomp' property='twitter:author'/><meta content='@hockeycomp' name='twitter:site'/><meta content='{{ $post->image }}' name='twitter:image'/><meta content='{{ $post->subtitle }}' name='twitter:description'/><meta content='{{ $post->title }}' name='twitter:title'/><meta content='index, follow' name='robots'/><meta name="author" content="https://www.hockeycomputindo.com"><link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"><link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"><link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> <script src="https://unpkg.com/vue/dist/vue.js"></script> <link href="{{ asset('/css/clean-blog.min.css') }}" rel="stylesheet"><link rel="icon" href="https://mesinkasironline.web.app/img/createwebsitelaravel.png"></head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger shadow border-bottom" id="mainNav">
        <div class="container">
            <a class="navbar-brand  text-white" href="/">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler navbar-toggler-right text-white" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="ml-auto navbar-nav  text-white">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/"><i class="fas fa-heading"></i>ome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('blog') }}"><i class="fab fa-blogger-b"></i>log</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('about') }}"><i class="fab fa-amazon"></i>bout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('contact') }}"><i class="fab fa-cuttlefish"></i>ontact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
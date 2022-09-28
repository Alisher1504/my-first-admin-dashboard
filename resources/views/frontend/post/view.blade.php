@extends('layouts.app')

@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")


@section('content')

<div class="py-4">

    <div class="container">

        <div class="row">

            <div class="col-md-9">

            
                <div class="category-heading">
                    <h4>{!! $post->name !!}</h4>
                </div>

                <div class="mt-3">
                    <h3>{{ $post->category->name .' / '. $post->name }}</h3>
                </div>

                <div class="card card-shadow mt-4">
                    <div class="card-body post-description">
                        <h6>{!! $post->description!!}</h6>
                    </div> 
                </div>   

                <div class="card card-shadow mt-4">
                    <div class="card-body post-description">
                        <a href="{{ $post->yt_iframe }}">video</a>
                    </div> 
                </div>   

            </div>

            

            <div class="col-md-3">
                <div class="border p-2">
                    <h4>Advertising Area</h4>
                </div>

                <div class="border p-2">
                    <h4>Advertising Area</h4>
                </div>

                <div class="border p-2">
                    <h4>Advertising Area</h4>
                </div>

                <div class="border p-2">
                    <h4>Advertising Area</h4>
                </div>

                <div class="card mt-3">

                <div class="card-header">
                    <h4>Latest Posts</h4>
                </div>
                <div class="card-body">

                    @foreach ($latest_posts as $latest_posts_item)

                        <a href="{{ url('tutorial/' . $latest_posts_item->category->slug.'/'.$latest_posts_item->slug) }}" class="text-decaration-none">
                            <h6> > {{ $latest_posts_item->name }} </h6>
                        </a>

                    @endforeach

                </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
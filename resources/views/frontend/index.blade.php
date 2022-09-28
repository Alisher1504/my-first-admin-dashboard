@extends('layouts.app')

@section('title', "web it")
@section('meta_description', "web it")
@section('meta_keyword', "web it")

@section('content')

<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel category-carousel owl-theme">
                    @foreach($all_categories as $all_cate_item)
                        <div class="item">
                            <a href="{{ url('tutorial/'.$all_cate_item->slug) }}" class="text-decoration-none">
                                <div class="card">
                                    <img src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="">
                                    <div class="card-body text-center">
                                        <h4 class="text-dark">{{ $all_cate_item->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                </div>

            </div>
        </div>
    </div>
</div>


<div class="container  ">
    <div class="bg-success my-4">
        <div class="border p-3 text-center">
            <h3>Advertise here</h3>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Funda of web it</h4>
                <div class="underline"></div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque sapiente laboriosam laborum necessitatibus cum expedita nobis sequi incidunt? Quas impedit saepe unde atque expedita quo error dolores perspiciatis nostrum facere.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem architecto nulla perferendis non, fugit minus ut aspernatur deserunt cupiditate ullam, molestiae doloremque exercitationem, nesciunt alias atque error libero repudiandae quos!
                    </p>
                
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Categories List</h4>
                <div class="underline"></div>  
            </div>
            
            @foreach($all_categories as $all_cateitem)

                <div class="col-md-3">
                    <div class="card card-body mb-3">
                        <a href="{{ url('tutorial/'. $all_cateitem->slug) }}" class="text-decoration-none">
                            <h5 class="text-dark mb-0">{{ $all_cateitem->name }}</h5>
                        </a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>


<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Last Posts</h4>
                <div class="underline"></div>  
            </div>
            <div class="col-md-8">
                @foreach($latest_posts as $latest_post_item)

                        <a href="{{ url('tutorial/'. $latest_post_item->category->slug.'/'.$latest_post_item->slug) }}" class="text-decoration-none">
                            <div class="card card-body bg-secondary shadow mb-3">
                                <h5 class="text-dark mb-0">{{ $latest_post_item->name }}</h5>
                                <h6 class="text-light">Posted On: {{ $latest_post_item->created_at->format('d-m-Y') }}</h6> 
                            </div>  
                        </a>
                     
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="border p-3 text-center">
                    <h3>Advertise here</h3>
                </div>
            </div>
            
        </div>
    </div>
</div>



@endsection
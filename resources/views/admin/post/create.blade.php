@extends('layouts.master')

@section('title', 'Add Post')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">

            @if($errors->any())

                <div class="alert alert-danger">

                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach

                </div>

            @endif

            <div class="card-header">
                <h4> View Post
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Posts</a>
                </h4>
            </div>

            <div class="card-body">
            
                <form action="{{ url('admin/add-post') }}" method="POST">
                    
                @csrf 
                    <div class="md-3">
                        <label for="">Category </label>
                        <select name="category_id" class="form-control">
                            @foreach ($category as $cateitem)
                                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="md-3">
                        <label for="">Post Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="md-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>

                    <div class="md-3">
                        <label for="">Description</label>
                        <textarea name="description" id="your_summernote" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="md-3">
                        <label for="">YouTube Iframe Link</label>
                        <input type="text" name="yt_iframe" class="form-control">
                    </div>

                    <h4>SEO Tags</h4>
                    <div class="md-3">
                        <label for="">Meta Link</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description"  class="form-control" rows="3"></textarea>                    
                    </div>

                    <div class="md-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description"  class="form-control" rows="3"></textarea>                    
                    </div>
                    <div class="md-3">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword" class="form-control" rows="3"></textarea>                    
                    </div>

                    <h4>Status</h4>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="md-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" />
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="md-3">
                                <button type="submit" class="btn btn-primary float-end">Save Post</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection
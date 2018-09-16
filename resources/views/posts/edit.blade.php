@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Edit Post</div>

                <div class="card-body">
                   
                   <form method="POST" action="{{ url('/editPost', array($posts->id)) }}" aria-label="{{ __('editPost') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="post_title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control{{ $errors->has('post_title') ? ' is-invalid' : '' }}" name="post_title" value="{{ $posts->post_title }}" required autofocus>

                                @if ($errors->has('post_title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="post_body" class="col-md-4 col-form-label text-md-right">{{ __('Post Body') }}</label>

                            <div class="col-md-6">
                                <textarea id="post_body" rows="7" type="text" class="form-control{{ $errors->has('post_body') ? ' is-invalid' : '' }}" name="post_body" required>{{ $posts->post_body }}</textarea>

                                @if ($errors->has('post_body'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('post_body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select id="category_id" type="text" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" required>
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @if(count($categories) > 0)
                                    @foreach($categories->all() as $category)
                                    <option value="{{ $category->id }}">{{$category->category}}</option>
                                    @endforeach
                                @endif
                                </select>
 
                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">  
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="post_image" class="col-md-4 col-form-label text-md-right">{{ __('Post Picture') }}</label>

                            <div class="col-md-6">
                                <input id="post_image" type="file" class="form-control{{ $errors->has('post_image') ? ' is-invalid' : '' }}" name="post_image" required>

                                @if ($errors->has('post_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('post_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ __('Update Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                 

                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

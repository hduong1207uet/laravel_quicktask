@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">{{ __("update_post") }}</h1>
        <!--Error Div-->
        @include('messages.error')
        <!--Update Form-->
        <form method="post" action="{{ route('posts.update', $post->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" name="id" value="{{$post->id}}" readonly />
            </div>

            <div class="form-group">
                <label for="title">{{ __("Title") }}:</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}" required/>
            </div>

            <div class="form-group">
                <label for="author">{{ __("Author") }}:</label>
                <input type="text" class="form-control" name="author" value="{{$post->author}}" required/>
            </div>

            <button type="submit" class="btn btn-primary">{{ __("update_post") }}</button>    
            <button type="button" class="btn_go_back btn btn-danger" >{{ __("go_back") }}</button>        
        </form>
    </div>
</div>
@endsection

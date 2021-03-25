@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">{{ __("add_new_comment") }}</h1>
    <div>
    <!--Display errors-->
    @include('messages.error')
    <!--Edit post form-->
    <form method="post" action="{{ route('comments.store') }}">
        @csrf
        <div class="form-group">    
            <label for="author">{{ __("Author") }}:</label>
            <input type="text" class="form-control" name="author" required/>
        </div>

        <div class="form-group">
            <label for="content">{{ __("Content") }}:</label>
            <input type="text" class="form-control" name="content" required/>
        </div>
        
        <div class="form-group">
            <label for="post_id">{{ __("post_id") }}:</label>
            <select class="group_select" name="post_id">
                @foreach ($postIds as $postId)
                    <option value="{{ $postId->id }}"> {{ $postId->id }} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ __("add_new_comment") }}</button>  
        <button type="button"  class="btn_go_back btn btn-danger" >{{ __("go_back") }}</button>   
    </form>
</div>
@endsection

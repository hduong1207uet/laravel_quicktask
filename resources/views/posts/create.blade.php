@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">{{ __("add_new_post") }}</h1>
    <div>
    <!--Display errors-->
    @include('messages.error')
    <!--Edit post form-->
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-group">    
            <label for="title">{{ __("Title") }}:</label>
            <input type="text" class="form-control" name="title" required/>
        </div>

        <div class="form-group">
            <label for="author">{{ __("Author") }}:</label>
            <input type="text" class="form-control" name="author" required/>
        </div>
        
        <button type="submit" class="btn btn-primary">{{ __("add_post") }}</button>  
        <button id="btn_go_back" type="button"  class="btn_go_back btn btn-danger" >{{ __("go_back") }}</button>   
    </form>
</div>
@endsection

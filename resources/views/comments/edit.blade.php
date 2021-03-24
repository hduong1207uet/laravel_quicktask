@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">{{ __("update_comment") }}</h1>
        <!--Error Div-->
        @include('messages.error')
        <!--Update Form-->
        <form method="post" action="{{ route('comments.update', $comment->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" name="id" value="{{$comment->id}}" readonly />
            </div>

            <div class="form-group">
                <label for="author">{{ __("Author") }}:</label>
                <input type="text" class="form-control" name="author" value="{{$comment->author}}" required/>
            </div>

            <div class="form-group">
                <label for="Content">{{ __("Content") }}:</label>
                <input type="text" class="form-control" name="content" value="{{$comment->content}}" required/>
            </div>

            <div class="form-group">
            <label for="post_id">{{ __("post_id") }}:</label>
            <select class="group_select" name="post_id">
                @foreach ($postIds as $postId)
                    <option value="{{ $postId->id }}"> {{ $postId->id }} </option>
                @endforeach
            </select>
            </div>

            <button type="submit" class="btn btn-primary">{{ __("update_comment") }}</button>    
            <button type="button" class="btn_go_back btn btn-danger" >{{ __("go_back") }}</button>        
        </form>
    </div>
</div>
@endsection

@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
         @include('messages.alert')  
    </div>
    <div class="col-sm-12">
        <h1 class="display-3">{{ __("Comments") }}</h1>
        <a href="{{ route('comments.create') }}"><button type="button" class="btn btn-success" id="btn-add">{{ __("add_new_comment") }}</button></a>
        <a href="{{ route('home') }}"><button type="button" class="btn_home btn btn-danger">{{ __("Home") }}</button></a>
        <!--Notification if post has no comment-->
        @if (!count($comments))
            <h5>{{ __("no_comment_msg") }}</h5>
        @endif
        <!--Table of comments-->
        <table class="table table-striped table-bordered">
            <!--Table head-->
            <thead>
                <tr class="bold_column">
                    <td>{{ __("ID") }}</td>
                    <td>{{ __("Author") }}</td>
                    <td>{{ __("Content") }}</td>
                    <td colspan="3" align="center">{{ __("Action") }}</td>
                <tr>
            <thead>
            <!--Table body--> 
            <tbody>
                @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->author }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>
                        <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-primary btn-sm">{{ __("Edit") }}
                    </td>
                    <td>
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">{{ __("Delete") }}</button>
                        </form>
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
</div>
@endsection

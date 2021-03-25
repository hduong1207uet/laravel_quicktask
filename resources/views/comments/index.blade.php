@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
         @include('messages.alert')  
    </div>
    <div class="col-sm-12"> 
        <h1 class="display-3">{{ __("Comments") }}</h1>
        <a href="{{ route('comments.create') }}"><button type="button" class="btn btn-success" id="btn-add">{{ __("add_new_comment") }}</button></a>
        <a href="{{ route('posts.index') }}"><button type="button" class="btn btn-success">{{ __("view_all_posts") }}</button></a>
        <button type="button" class="btn_reload btn btn-danger">{{ __("Refresh") }}</button>
        <!--Table of Comment-->
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bold_column">
                    <td>{{ __("ID") }}</td>
                    <td>{{ __("Author") }}</td>
                    <td>{{ __("Content") }}</td>
                    <td>{{ __("post_id") }}</td>
                    <td colspan="3" align="center">{{ __("Action") }}</td>
                <tr>
            <thead>
            <tbody>
                @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->author }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->post_id }}</td>
                    <td>
                        <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-primary btn-sm">{{ __("Edit") }}
                    </td>
                    <td>
                        <form id="form_delete_{{ $comment->id }}" action="{{ route('comments.destroy', $comment->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-id="{{ $comment->id }}" data-lang="{{ app()->getLocale() }}" class="btn_delete_post btn btn-danger btn-sm">{{ __("Delete") }}</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('posts.show', $comment->post_id) }}" class="btn btn-primary btn-sm">{{ __("view_post") }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
</div>
@endsection

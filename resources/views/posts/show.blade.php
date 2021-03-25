@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
         @include('messages.alert')  
    </div>
    <div class="col-sm-12"> 
        <h1 class="display-3">{{ __("parent_post") }}</h1>
        <a href="{{ route('posts.index') }}"><button type="button" class="btn btn-success" id="btn-add">{{ __("view_all_posts") }}</button></a>
        <button type="button" class="btn_reload btn btn-danger">{{ __("Refresh") }}</button>
        <!--Table of Posts-->
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bold_column">
                    <td>{{ __("ID") }}</td>
                    <td>{{ __("Title") }}</td>
                    <td>{{ __("Author") }}</td>
                    <td colspan="3" align="center">{{ __("Action") }}</td>
                <tr>
            <thead>
            <tbody>
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">{{ __("Edit") }}
                    </td>
                    <td>
                        <form id="form_delete_{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-id="{{ $post->id }}" data-lang="{{ app()->getLocale() }}" class="btn_delete_post btn btn-danger btn-sm">{{ __("Delete") }}</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('posts.showMessage', $post->id) }}" class="btn btn-primary btn-sm">{{ __("view_all_comments") }}</a>
                    </td>
                </tr>
            </tbody>
        </table> 
    </div>
</div>
@endsection

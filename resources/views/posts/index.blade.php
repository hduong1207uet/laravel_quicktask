@extends('base')

@section('main')
<div class="row">
   <div class="col-sm-12">
     <h1 class="display-3">{{ __("Posts") }}</h1>
     <button type="button" class="btn btn-success" id="btn-add">{{ __("add_new_post") }}</button>
     <table class="table table-striped table-bordered">
        <!--Table head-->
        <thead>
            <tr>
                <td>{{ __("ID") }}</td>
                <td>{{ __("Title") }}</td>
                <td>{{ __("Author") }}</td>
                <td colspan="3" align="center">{{ __("Action") }}</td>
            <tr>
        <thead>
        <!--Table body--> 
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">{{ __("Edit") }}
                </td>
                <td>
                    <form action="{{ route('posts.store', $post->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">{{ __("Delete") }}</button>
                    </form>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-sm">{{ __("view_all_comments") }}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
     </table> 
   </div>
</div>
@endsection

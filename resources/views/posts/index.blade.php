@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="list-group">
                <p>
                    <a class="btn btn-primary btn-lg" href="posts/create" role="button">Create Post</a>
                </p>



                @foreach($posts as $post)
                    <a href="posts/{{$post->id}}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{ $post->description }}  <small style="float: right">{{ toDate( $post->date)->format('d/m/Y') }}</small>  </h4>

                        <span class="badge"> {{ count($post->comments)}}</span>

                        <p class="list-group-item-text">{{ \Illuminate\Support\Str::words($post->body, 10, '...') }}</p>
                    </a>
                @endforeach
            </div>
        </div>

@endsection
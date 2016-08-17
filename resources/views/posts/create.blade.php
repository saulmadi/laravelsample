@extends('layouts.app')

@section('content')

    <div>
        <form role="form" action="/posts" method="POST" class="">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title" class="control-label">Title</label>

                    <input id="title" class=" form-control" name="description" placeholder="Title" required>

            </div>

            <div class="form-group">

                <textarea id="body" class="form-control" rows="25" name="body" placeholder="Body" required></textarea>

            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>

@endsection
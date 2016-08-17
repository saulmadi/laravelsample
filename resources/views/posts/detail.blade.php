@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="page-header">
                <h1>{{$post->description}} <small> {{toDate( $post->date)->format('d/m/Y')}}</small> </h1>
            </div>
            <div id="content">
            {{$html}}

            </div>

            <hr>

            <div  >
                <h3>Comments</h3>
                <hr>
                <div>
                    <form id="form" method="POST" action="/posts/{{$post->id}}/comments" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input id="commentInput" type="text" name="text" class="form-control" placeholder="Add a comment" required>

                        </div>
                    </form>
                </div>
                <div>

                    @foreach($post->comments as $comment)

                        <div class="well well-sm">
                            <div>
                                <h4>{{$comment->user->name}} <small>{{toDate( $comment->date)->format('d/m/y')}}</small></h4>
                            </div>

                            <p>{{$comment->text}}</p>

                        </div>

                    @endforeach


                </div>
            </div>

        </div>





@endsection

@section('footer')
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
    <script>
        $("commentInput").keypress(function(event) {
            if (event.which == 13) {
                event.preventDefault();
                $("form").submit();
            }
        });
    </script>
    <script>


        function load_post(){
            document.getElementById("content").innerHTML=document.getElementById("content").innerText;
        }
        load_post();
    </script>
@endsection
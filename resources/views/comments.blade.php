@extends('frontend.master')

@section('content')

<style type="text/css">
    .comment .comment{
        margin-left: 20px;
    }
</style>

<section class="banner-bottom-wthreelayouts py-3 py-5">
    <div class="container">
        <h1>{{$product->name}}</h1>

        @include('frontend.partials._comments',['comments'=>$product->comments])

        <!-- <div class="comment">
            @foreach($product->comments as $comment)
            <p><strong>{{$comment->user->name}}</strong> &bull;{{$comment->created_at->diffForHumans()}}</p>
            <p>{{$comment->body}}</p>
                <div class="comment">
                    @foreach($comment->replies as $reply)
                        <p><strong>{{$reply->user->name}}</strong> &bull;{{$reply->created_at->diffForHumans()}}</p>
                        <p>{{$reply->body}}</p>                
                        <p>In Reply to {{$reply->comment->user->name}}</p>                
                    @endforeach
                </div>
            @endforeach
        </div> -->

    </div>
</section>

@endsection
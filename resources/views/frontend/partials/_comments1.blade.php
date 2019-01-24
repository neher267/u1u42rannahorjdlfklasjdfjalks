<div class="comment">
    @foreach($comments as $comment)
    <p><strong>{{$comment->user->name}}</strong> &bull;{{$comment->created_at->diffForHumans()}}</p>
    @if($comment->comment)
    <p>In Reply to {{$comment->comment->user->name}}</p>
    @endif
    <p>{{$comment->body}}</p>
        @include('frontend.partials._comments',['comments'=>$comment->replies])
    @endforeach
</div>
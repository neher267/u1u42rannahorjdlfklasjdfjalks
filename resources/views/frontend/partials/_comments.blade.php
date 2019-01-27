@include('frontend.partials._comment-form')

@foreach($comments as $comment)
<div class="bootstrap-tab-text-grid comment">
    <div class="bootstrap-tab-text-grid-left">
        @if(empty($comment->user->profile_image))
        <i class="fa fa-user"></i>
        @else
        <img src="{{asset($comment->user->profile_image)}}" style="height: 32px; width: 32px; border-radius: 50%;">
        @endif
    </div>
    <div class="bootstrap-tab-text-grid-right comment-body">
        <ul>
            <li><strong>{{$comment->user->name}}</strong></li>
        </ul>
        <p class="comment-color">{{$comment->body}}</p>
    </div>
    <div class="bootstrap-tab-text-grid-right">
        <ul>
            <li><a href="#" onclick="reply('<?php echo "raply$comment->id"; ?>')">Reply</a> &bull;<span class="small-tag">{{$comment->created_at->diffForHumans()}}</span></li>
        </ul>       
    </div>
    @include('frontend.partials._replay-form', ['comment'=>$comment])
    @foreach($comment->replies as $replay)
        @include('frontend.partials._comments2', ['replay'=>$replay])
        @include('frontend.partials._replay-form', ['comment'=>$replay]) 

        @foreach($replay->replies as $replay2)
            @include('frontend.partials._comments2', ['replay'=>$replay2])
            @include('frontend.partials._replay-form', ['comment'=>$replay2])  
        @endforeach 
    @endforeach
    <div class="clearfix"> </div>
</div>
@endforeach



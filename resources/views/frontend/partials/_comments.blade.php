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
            <li><a href="#">{{$comment->user->name}}</a></li>
        </ul>
        <p class="comment-color">{{$comment->body}}</p>
    </div>
    <div class="bootstrap-tab-text-grid-right">
        <ul>
            <li><a href="#">Rpelay</a> &bull; 10 s</li>
        </ul>       
    </div>
    <div class="clearfix"> </div>
</div>
@endforeach
@include('frontend.partials._replay-form')
@include('frontend.partials._comments2')
@include('frontend.partials._replay-form')


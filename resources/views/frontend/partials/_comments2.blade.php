<div class="bootstrap-tab-text-grid replay">
    <div class="bootstrap-tab-text-grid-left">
        @if(empty($replay->user->profile_image))
        <i class="fa fa-user"></i>
        @else
        <img src="{{asset($replay->user->profile_image)}}" style="height: 20px; width: 20px; border-radius: 50%;">
        @endif
    </div>
    <div class="bootstrap-tab-text-grid-right comment-body">
        <ul>
            <li><a href="#">{{$replay->user->name}}</a> &bull;{{$replay->created_at->diffForHumans()}}</li>
        </ul>
        <p class="comment-color">{{$replay->body}}</p>
    </div>
    <div class="bootstrap-tab-text-grid-right">
        <ul>
            <li><a href="#">Rpelay</a> &bull;10s. In Reply to {{$replay->comment->user->name}}</li>
        </ul>       
    </div>
    <div class="clearfix"> </div>
</div>


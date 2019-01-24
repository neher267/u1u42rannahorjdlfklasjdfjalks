@include('frontend.partials._comment-form')

<div class="bootstrap-tab-text-grid comment">
    <div class="bootstrap-tab-text-grid-left">
        <img src="{{asset('frontend/images/team1.jpg')}}" style="height: 32px; width: 32px; border-radius: 50%;">
    </div>
    <div class="bootstrap-tab-text-grid-right comment-body">
        <ul>
            <li><a href="#">Admin</a></li>
        </ul>
        <p class="comment-color">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.</p>
    </div>
    <div class="bootstrap-tab-text-grid-right">
        <ul>
            <li><a href="#">Rpelay</a> &bull; 10 s ago</li>
        </ul>       
    </div>
    <div class="clearfix"> </div>
</div>
@include('frontend.partials._replay-form')
@include('frontend.partials._comments2')
@include('frontend.partials._replay-form')


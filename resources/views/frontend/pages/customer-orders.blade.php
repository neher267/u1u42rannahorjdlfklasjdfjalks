@extends('frontend.master')

@section('content')
<section class="banner-bottom-wthreelayouts py-3 py-5">
    <div class="container">
        <div class="inner_sec" style="margin-bottom: 30px">
            <p class="sub text-center mb-lg-5 mb-3">{{$page_title}}</p>
            <div class="address row">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Sr.No</th>
							<th>Orderd Time</th>
							<th>Shipping Address</th>
							<th>Order Status</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0 ?>
						@foreach($orders as $order)
						<tr>
							<td>{{++$i}}</td>
							<td>{{$order->created_at->diffForHumans()}}</td>
							<td>{{$order->s_address}}</td>
							<td>
								@if($order->status==0)
								<span>Pending</span>
								@elseif($order->status==1)
								<span>Confirmed</span>
								@elseif($order->status==2)
								<span>Canceled</span>
								@endif
							</td>
						</tr>	
						@endforeach			      
					</tbody>
				</table>
            </div>
        </div>
    </div>
</section>
@endsection
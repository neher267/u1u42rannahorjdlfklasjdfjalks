<!DOCTYPE HTML>
<html>
<head>
<title>{{config('app.name')}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{{config('app.keywords')}}" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<!-- Custom CSS -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Neher -->
<style type="text/css">
	.green-btn{
		color: green;
		margin-right: 3px;
	}	
</style>
<!-- end Neher -->
<!-- Graph CSS -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="{{asset('css/icon-font.min.css')}}" type='text/css' />
<script src="{{asset('js/simpleCart.min.js')}}"> </script>
<script src="{{asset('js/amcharts.js')}}"></script>	
<script src="{{asset('js/serial.js')}}"></script>
<script src="{{asset('js/light.js')}}"></script>
<!-- //lined-icons -->
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
</head> 

<body>
<div class="page-container">
	<!-- content-inner -->
	<div class="left-content">
		<div class="inner-content">
			<!-- header-starts -->
			<div class="header-section">
				<!-- top_bg -->
				@include('layouts.partials._top-bg')		
				<!-- /top_bg -->
			</div>
			@role('customer')
			<div class="header_bg">			
				@include('layouts.partials._header-bg')						
			</div>
			@endrole
			<!-- //header-ends -->
					
			<!--content-->
			<div class="content">
				<div class="women_main">
					@yield('content')
					@role('customer')
						@include('layouts.partials._footer')
					@endrole	
				</div>
				<div class="clearfix"></div>
			</div>
			<!--content-->
		</div>
	</div>
	<div class="clearfix"></div>
	<!--//content-inner-->

	<!--/sidebar-menu-->
	<div class="sidebar-menu">
		@include('layouts.partials._sidebar-menu')	
	</div>
	<div class="clearfix"></div>		
</div>

<!--js -->
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- /Bootstrap Core JavaScript -->
<script src="{{asset('js/jquery.fn.gantt.js')}}"></script>

<!-- js Neher -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('.datatable').DataTable();
	    $('.flash').delay(7000).fadeOut(1000);
	} );
</script>

<script type="text/javascript">
	function alertUser($message)
	{
		return confirm('Are you sure want to '+$message);
	}	

	function confirm_user($message)
	{
		return confirm('Are you sure want to '+$message+' it?');
	}
</script>
<!-- end js Neher -->

<script>
	var toggle = true;
			
	$(".sidebar-icon").click(function() {        
	  if (toggle)
	  {
		$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
		$("#menu span").css({"position":"absolute"});
	  }
	  else
	  {
		$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
		setTimeout(function() {
		  $("#menu span").css({"position":"relative"});
		}, 400);
	 }
					
	toggle = !toggle;
	});
</script>
<script type="text/javascript">
$(function() {
	// We use an inline data source in the example, usually data would
	// be fetched from a server

	var data = [],
	totalPoints = 300;
	function getRandomData() {
		if (data.length > 0)
			data = data.slice(1);
		// Do a random walk
		while (data.length < totalPoints) {
			var prev = data.length > 0 ? data[data.length - 1] : 50,
				y = prev + Math.random() * 10 - 5;
			if (y < 0) {
				y = 0;
			} else if (y > 100) {
				y = 100;
			}
			data.push(y);
		}
		// Zip the generated y values with the x values
		var res = [];
		for (var i = 0; i < data.length; ++i) {
			res.push([i, data[i]])
		}
		return res;
	}

// Set up the control widget

var updateInterval = 30;
$("#updateInterval").val(updateInterval).change(function () {
	var v = $(this).val();
	if (v && !isNaN(+v)) {
		updateInterval = +v;
		if (updateInterval < 1) {
			updateInterval = 1;
		} else if (updateInterval > 2000) {
			updateInterval = 2000;
		}
		$(this).val("" + updateInterval);
	}
});

var plot = $.plot("#placeholder", [ getRandomData() ], {
	series: {
		shadowSize: 0	// Drawing is faster without shadows
	},
	yaxis: {
		min: 0,
		max: 100
	},
	xaxis: {
		show: false
	}
});

function update() {

	plot.setData([getRandomData()]);

	// Since the axes don't change, we don't need to call plot.setupGrid()

	plot.draw();
	setTimeout(update, updateInterval);
}

update();

// Add the Flot version string to the footer

$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
});

</script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
<script>
	$(function() {

		"use strict";

		$(".gantt").gantt({
			source: [{
				name: "Sprint 0",
				desc: "Analysis",
				values: [{
					from: "/Date(1320192000000)/",
					to: "/Date(1322401600000)/",
					label: "Requirement Gathering", 
					customClass: "ganttRed"
				}]
			},{
				name: " ",
				desc: "Scoping",
				values: [{
					from: "/Date(1322611200000)/",
					to: "/Date(1323302400000)/",
					label: "Scoping", 
					customClass: "ganttRed"
				}]
			},{
				name: "Sprint 1",
				desc: "Development",
				values: [{
					from: "/Date(1323802400000)/",
					to: "/Date(1325685200000)/",
					label: "Development", 
					customClass: "ganttGreen"
				}]
			},{
				name: " ",
				desc: "Showcasing",
				values: [{
					from: "/Date(1325685200000)/",
					to: "/Date(1325695200000)/",
					label: "Showcasing", 
					customClass: "ganttBlue"
				}]
			},{
				name: "Sprint 2",
				desc: "Development",
				values: [{
					from: "/Date(1326785200000)/",
					to: "/Date(1325785200000)/",
					label: "Development", 
					customClass: "ganttGreen"
				}]
			},{
				name: " ",
				desc: "Showcasing",
				values: [{
					from: "/Date(1328785200000)/",
					to: "/Date(1328905200000)/",
					label: "Showcasing", 
					customClass: "ganttBlue"
				}]
			},{
				name: "Release Stage",
				desc: "Training",
				values: [{
					from: "/Date(1330011200000)/",
					to: "/Date(1336611200000)/",
					label: "Training", 
					customClass: "ganttOrange"
				}]
			},{
				name: " ",
				desc: "Deployment",
				values: [{
					from: "/Date(1336611200000)/",
					to: "/Date(1338711200000)/",
					label: "Deployment", 
					customClass: "ganttOrange"
				}]
			},{
				name: " ",
				desc: "Warranty Period",
				values: [{
					from: "/Date(1336611200000)/",
					to: "/Date(1349711200000)/",
					label: "Warranty Period", 
					customClass: "ganttOrange"
				}]
			}],
			navigate: "scroll",
			scale: "weeks",
			maxScale: "months",
			minScale: "days",
			itemsPerPage: 10,
			onItemClick: function(data) {
				alert("Item clicked - show some details");
			},
			onAddClick: function(dt, rowId) {
				alert("Empty space clicked - add an item!");
			},
			onRender: function() {
				if (window.console && typeof console.log === "function") {
					console.log("chart rendered");
				}
			}
		});

		$(".gantt").popover({
			selector: ".bar",
			title: "I'm a popover",
			content: "And I'm the content of said popover.",
			trigger: "hover"
		});

		prettyPrint();
	});
</script>
<script src="{{asset('js/menu_jquery.js')}}"></script>
</body>
</html>
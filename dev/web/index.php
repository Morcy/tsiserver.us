
<!DOCTYPE HTML>
<html>
	<head>
		<title>TSIDEV&trade;PORTAL</title>
		<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="web/js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="web/css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
	</head>
	<body>
		<div class="main">
		<!----container---->
		<div class="container">
			<!----- content ----->
			<div class="4-col-grids">
				<div class="col-md-3">
					<div class="1-col-grids">
						<!----profile---->
						<div class="profile text-center">
							<div class="profile-head">
								<a href="#"><span> </span></a>
							</div>
							<div class="profile-info">
								<h2><a href="#"><?php echo $_SESSION['authID']; ?></a></h2>
								<span>Web Design | Cluj Napoca</span>
							</div>
						</div>
						<!----profile---->
						<!---- PIE CHART ---->
						<div class="pie-chart">
							<div class="pie-chrt-head">
								<h2>STAT CHART</h2>
							</div>
							<!----up-load-stats---->
						<div class="up-load-stats">
						<div class="chart">
							<!-----upload-js-files---->
								<script type="text/javascript" src="web/js/Chart.js"></script>
							<!---//upload-js-files---->
					                <div class="diagram">
					                  <canvas id="canvas" height="210" width="210"> </canvas>
					                  <h4>99<span>percent</span></h4>   
					                 </div>
									<div class="chart_list text-left">
						           	  <ul class="list-unstyled text-left">
						           	  	<li><span class="color1"> </span>IO Exception<label>10%</label><div class="clearfix"> </div></li>
						           	  	<li><span class="color2"> </span>Chocolate milk<label>1%</label><div class="clearfix"> </div></li>
						           	  	<li><span class="color3"> </span>Langue Support<label>35%</label><div class="clearfix"> </div></li>
						           	  	<li><span class="color4"> </span>Potatoes<label>2%</label><div class="clearfix"> </div></li>
						           	  	<li><span class="color5"> </span>Nothing<label>52%</label><div class="clearfix"> </div></li>
						           	  	<div class="clearfix"> </div>	
						           	  </ul>
						           </div>
						           <script>
									var doughnutData = [
											{
												value: 10,
												color:"#7C94BE"
											},
											{
												value : 1,
												color : "#78C8E6"
											},							
											{
												value : 35,
												color : "#00CC0A"
											},	
											{
												value : 2,
												color : "#FF895B"
											},							
										
										];				
										var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);					
								</script>
					          </div>
						</div>
						<!--//up-load-stats---->
						</div>
						<!---- PIE CHART ---->
					</div>
				</div>
				<!----col-2---->
				<div class="col-md-3">
					<div class="2-col-grids">
						<!---- status ---->
						<div class="status">
							<div class="status-head text-center">
								<h3>SALES STATS</h3>
							</div>
							<!---start-chart---->
							<!--graph-->
							<link rel="stylesheet" href="web/css/graph.css">
							<script src="web/js/jquery.flot.min.js"></script>
							<!--//graph-->
									<script>
									$(document).ready(function () {
									
										// Graph Data ##############################################
										var graphData = [{
												// Returning Visits
												data: [ [6, 72.69], [7,53.80], [8, 78.85], [9, 0], ],
												color: '#59676B',
												points: { radius: 4, fillColor: '#59676B' }
											}
										];
									
										// Lines Graph #############################################
										$.plot($('#graph-lines'), graphData, {
											series: {
												points: {
													show: true,
													radius: 1
												},
												lines: {
													show: true
												},
												shadowSize: 0
											},
											grid: {
												color: '#59676B',
												borderColor: 'transparent',
												borderWidth: 10,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: false
											},
											yaxis: {
												tickSize: 1200
											}
										});
									
										// Bars Graph ##############################################
										$.plot($('#graph-bars'), graphData, {
											series: {
												bars: {
													show: true,
													barWidth: .9,
													align: 'center'
												},
												shadowSize: 0
											},
											grid: {
												color: '#fff',
												borderColor: 'transparent',
												borderWidth: 20,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: 2
											},
											yaxis: {
												tickSize: 1000
											}
										});
									
										// Graph Toggle ############################################
										$('#graph-bars').hide();
									
										$('#lines').on('click', function (e) {
											$('#bars').removeClass('active');
											$('#graph-bars').fadeOut();
											$(this).addClass('active');
											$('#graph-lines').fadeIn();
											e.preventDefault();
										});
									
										$('#bars').on('click', function (e) {
											$('#lines').removeClass('active');
											$('#graph-lines').fadeOut();
											$(this).addClass('active');
											$('#graph-bars').fadeIn().removeClass('hidden');
											e.preventDefault();
										});
									
										// Tooltip #################################################
										function showTooltip(x, y, contents) {
											$('<div id="tooltip">' + contents + '</div>').css({
												top: y - 16,
												left: x + 20
											}).appendTo('body').fadeIn();
										}
									
										var previousPoint = null;
									
										$('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
											if (item) {
												if (previousPoint != item.dataIndex) {
													previousPoint = item.dataIndex;
													$('#tooltip').remove();
													var x = item.datapoint[0],
														y = item.datapoint[1];
														showTooltip(item.pageX, item.pageY, y+ x );
												}
											} else {
												$('#tooltip').remove();
												previousPoint = null;
											}
										});
									
									});
									</script>
							<!-- Graph HTML -->
							<div id="graph-wrapper">
								<div class="graph-container">
									<div id="graph-lines"> </div>
									<div id="graph-bars"> </div>
								</div>
							</div>
							<!-- end Graph HTML -->
							<!---//End-chart---->
						</div>
						<!---- status ---->
						<!---- option-menu ---->
						<script type='text/javascript' src="web/js/select.js"></script>
						<div class="option-menu">
							<form action="#">
								<p>
									<select class="turnintodropdown">
										<option>Downloads</option>
											<option>PSM SDK</option>
							  				<option>PSM EBOOK</option>
							  				<option>SCE DOMAIN FIX</option>
							  				<option class="active">DEV PORTAL</option>
									</select>
								</p>
							</form>
						</div>
						<!----//option-menu ---->
					</div>
				</div>
				<!---//col-2---->
				<!--- col-3 ---->
				<div class="col-md-3">
					<div class="col-3">
						<!---- to-day --->
						<?php
							$today = getdate();
						?>
						<div class="to-day text-center">
							<h3>TODAY</h3>
							<h1><?php echo $today['mday']; ?></h1>
							<span>of <?php echo $today['month'] . ' ' . $today['year']; ?></span>
						</div>
						<!---- to-day --->
						<!---- calender ---->
						<div class="calender">
							<div class="example1" style="margin:0 auto"> </div>
							<script src="web/js/jquery.supercal.js"></script> 
							<script>
										$('.example1').supercal({
											transition: 'carousel-vertical'
										});
							</script>

						</div>
						<!---- calender ---->
						<div class="clearfix"> </div>
					</div>
				<!--- //col-3 ---->
				</div>
				<!--- col-4 ---->
				<div class="col-4">
					<div class="col-md-3">
						<!---- copy-right ---->
						<div class="copy-right">
							<p>Proudly a partner of <a href="http://us.playstation.com/corporate/about/" target="_blank">SCEA</a></p>
						</div>
						<!---- copy-right ---->
					</div>
				</div>
				<!--- //col-4 ---->
				<div class="clearfix"> </div>
			</div>
			</div>
			<!----- content ----->
		</div>
		<!----container---->
		</div>
	</body>
</html>


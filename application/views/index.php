<!DOCTYPE html>
<html>
<head>
	<title>OOH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link href="<?php echo base_url('assets/css/ion.rangeSlider.skinModern.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/ion.rangeSlider.css') ?>" rel="stylesheet"> 

    <link href="<?php echo base_url('assets/css/bootstrap-datepicker3.min.css') ?>" rel="stylesheet"> 

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script> 
    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.3.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/ion-rangeSlider/ion.rangeSlider.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script> 



</head>
	<style type="text/css">
		.cusBG {
			-webkit-box-shadow: 0px 2px 15px 1px rgba(51,51,51,1);
			-moz-box-shadow: 0px 2px 15px 1px rgba(51,51,51,1);
			box-shadow: 0px 2px 15px 1px rgba(51,51,51,1);
		    padding: 15px;
    		border-radius: 5px;
		}
		body {
			height: 100vh;
			background: url(<?php echo base_url('assets/img/bg.jpg') ?>) no-repeat center;
			background-size: cover;
		}
		.nopad-col { padding: 0; }
		.cusPad1 { padding-right: 5px; }
		.cusPad2 { padding-left: 5px; }
		.navs { background: #f9f9f9; height: 60px; border-bottom: 2px solid #20b426; box-shadow: 0 2px 2px rgba(0,0,0,0.3); }
	</style>
<body>
	<div class="col-md-12 navs">
		<center><h1 style="margin: 0; font-weight: bolder; padding: 10px;">OOH!</h1></center>
	</div>
	<br>
	<div style="clear: both;"></div>
	<div class="container">
		<form class="form-horizontal" style="margin: 30px 0;">
			<div class="col-md-6"> 
				<div class="cusBG">
					<h4>Personal Info</h4>
					<div class="form-group"> 
						<div class="col-sm-12">
							<input type="text" class="form-control" id="" placeholder="Enter Name / Company Name">
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-sm-6 cusPad1"> 
							<input type="email" class="form-control" id="" placeholder="Enter Email">
						</div>
						<div class="col-sm-6 cusPad2"> 
							<input type="text" class="form-control" id="" placeholder="Contact Number">
						</div>
					</div> 
					<br>
					<h4>Ad Info</h4>
					<div class="form-group">
						<div class="col-sm-12"> 
							<select class="form-control cusSelect">
								<option value="" selected disabled>Select Location</option>
								<option class="loc1" value="<?php echo base_url('assets/img/loc1.jpg') ?>">Location 1</option>
								<option class="loc2" value="<?php echo base_url('assets/img/loc2.jpg') ?>">Location 2</option>
								<option class="loc3" value="<?php echo base_url('assets/img/loc3.jpg') ?>">Location 3</option>
								<option class="loc4" value="<?php echo base_url('assets/img/loc4.jpg') ?>">Location 4</option>
							</select>
						</div>
					</div> 
					<div class="form-group"> 
						<div class="col-sm-12"> 
						<b><h5>Select Budget :</h5></b>
						<input type="text" id="example_id" name="example_name" value="" />	
						</div>
					</div>
					<div class="form-group">
						<div class="span5 col-md-12" id="sandbox-container">
							<b><h5>Select Schedule :</h5></b>
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" class="input-sm form-control" name="start">
							    <span class="input-group-addon">to</span>
							    <input type="text" class="input-sm form-control" name="end">
							</div>
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div> 
				</div>  
			</div> 
			<div class="col-md-6">
				<div class="cusBG">
					<img class="billboards" src="<?php echo base_url('assets/img/billboard.png');?>" style="width: 100%;">
				</div>
			</div>
			<div style="clear: both;"></div>
		</form>
	</div>
</body>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>  


	<script type="text/javascript"> 
		$("#example_id").ionRangeSlider({
		    type: "double",
		    grid: true,
		    min: 0,
		    max: 70000,
		    from: 5000,
		    to: 18000,
		    prefix: "$"
		});		

		$('#sandbox-container .input-daterange').datepicker({
		    autoclose: true
		}); 


		$(document).ready(function(){
			$(".cusSelect").change(function(){ 
				var bill = this;
				 
				$("img.billboards").fadeOut("fast", function(){
					$("img.billboards").attr("src",$(bill).val()); 
					$("img.billboards").fadeIn("slow"); 
				});
				
			});
		});

	</script>

</html>
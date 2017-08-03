<style type="text/css">
	a:hover, a:focus, a:active {
		text-decoration: none; }

	.admin-head {
		position: fixed; top: 0; left: 250px;
		width: calc(100% - 250px);
		height: 35px;
		background-color: #333;
		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
		z-index: 999;
		transition: 0.5s; }
	.admin-head ul {
	    list-style-type: none;
	    padding: 0;
		overflow: hidden; }
	.admin-head ul li {	    
		float: left;
	    color: rgba(255,255,255,0.6);
	    padding: 7.5px 20px;
    	box-shadow: 1px 3px 1px rgba(0,0,0,0.3); }
	.admin-dash {
		position: fixed; top: 0; left: 0;
		width: 250px;
		height: 100vh;
		background-color: #333;
		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
		transition: 0.5s; }
	.admin-dash .title {
	    color: white;
	    font-size: 18px;
	    font-weight: bold;
	    text-align: center;
	    padding: 20px 10px; }
	.admin-dash ul {
	    list-style-type: none;
	    padding-left: 0px; }
	.admin-dash ul li {
	    color: rgba(255,255,255,0.6);
	    padding: 10px 20px;
	    border-bottom: 1px solid rgba(0,0,0,0.2);
	    border-left: 0 solid white;
	    transition: 0.5s; }
	.admin-dash ul li:hover, .admin-dash ul li.active {
		color: white;
		border-left: 5px solid white;
		transition: 0.3s; }
	.minimizer {
	    position: absolute;
	    color: white;
	    font-size: 20px;
	    bottom: 3px;
	    right: 10px;
	    cursor: pointer; }

	.main-content {
	    float: right;
	    width: calc(100% - 250px);
	    padding: 40px 10px;
	    transition: 0.5s; }
	.minimized { margin-left: -210px; transition: 0.5s; }    
    .full { width: calc(100% - 40px); transition: 0.5s; }    
    .admin-head.full { left: 40px; transition: 0.5s; }	    
</style>

<div class="admin-head">
	<ul>
		<a href="#"><li><i class="fa fa-user"></i> User</li></a>
		<a href="#"><li><i class="fa fa-sign-out"></i> Logout</li></a>
	</ul>
</div>

<div class="admin-dash">
	<div class="title">Admin Dashboard</div>
	<ul>
		<a href="#"><li class="active">Billboards</li></a>
		<a href="#"><li>Reservations</li></a>
	</ul>
	<div class="minimizer"><i class="fa fa-minus-square"></i></div>	
</div>

<div class="main-content">

<script type="text/javascript">
	var isFull = false;
	$('.minimizer').click(function() {
		if(!isFull) {
			$('.admin-head').addClass('full');
			$('.admin-dash').addClass('minimized');
			$('.main-content').addClass('full');

			$('.minimizer i').addClass('fa-plus-square');
			$('.minimizer i').removeClass('fa-minus-square');
			isFull=true;
		} else {
			$('.admin-head').removeClass('full');
			$('.admin-dash').removeClass('minimized');
			$('.main-content').removeClass('full');

			$('.minimizer i').removeClass('fa-plus-square');
			$('.minimizer i').addClass('fa-minus-square');
			isFull=false;
		}
	});
</script>
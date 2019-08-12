<?php include("Admin/View/Layout/adheader.php"); ?>

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Thống kê
			<!-- <small>Subheading</small> -->
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=statistical">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Thống kê
			</li>
		</ol>
		<div class="form-group row">
			<form action="" method="POST">
				<div class="col-sm-4">
                    <input type="date" id="search_text" name="txtNgayThongKe" class="form-control" value="<?php echo date('Y-m-d'); ?>"/> 
                </div>
                <button type="button" id="searchDay" class="btn btn-primary">Thống kê theo ngày</button>
                <button type="button" id="searchMonth" class="btn btn-danger">Thống kê theo tháng</button>
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12" id="table_data"></div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	    var search = $('#search_text').val();
	    LoadDataDay(search);
	});

	function LoadDataDay(query){
		$.ajax({
		    url:"Admin/Controller/Statistical/searchday.php",
		    method:"POST",
		    data:{query:query},
		    success:function(data) {
		    	$('#table_data').html(data);
		   	}
		});
	}

	function LoadDataMonth(query){
		$.ajax({
		    url:"Admin/Controller/Statistical/searchmonth.php",
		    method:"POST",
		    data:{query:query},
		    success:function(data) {
		    	$('#table_data').html(data);
		   	}
		});
	}

	$('#searchDay').click(function() {
	    var search = $('#search_text').val();
	    LoadDataDay(search);
	});

	$('#searchMonth').click(() => {
		var search = $('#search_text').val();
	    LoadDataMonth(search);
	});
</script>

<?php include("Admin/View/Layout/adfooter.php"); ?>
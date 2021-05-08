<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style>
		.align-middle
		{
			vertical-align: middle !important;
		}
		.previous
		{
		
			float:left;
			
		}
		.next
		{
			float:left;
			
			
		}
		.input-group
		{
			width:70%;
		}
		
		
		</style>
	</head>
	<body>
		<div style="padding: 0 70px;">
	    <h2>PRODUCT MODULE</h2>
      <hr>


		<div class="row">
				<div class="col-xs-12 col-sm-8">
				
					<div class="input-group">
					
						<input type="text " class="form-control " placeholder="SEARCH BY USER DETAILS " id="keyword" >
						
						<span class="input-group-btn">

							<button class="btn btn-primary" type="button" id="btn-search">SEARCH</button>
							
						</span>
					</div>
				</div>
			</div>


            <br>

<div class="row">
            
<div class="col-md-12">
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal" >Add Prouct</button>
<br>
<br>


<form method="post" >
       
		<button type="submit" id="export" name="export" class="btn btn-warning button-loading float right" data-loading-text="Loading..." formaction="export_excel.php" float-right>Export To Excel</button>
		<button type="submit" id="export" name="create_pdf" class="btn btn-warning button-loading float right" data-loading-text="Loading..." formaction="export_pdf.php" float-right>Export To Pdf</button>
</form>

<br>





<!-- <form action="export_excel.php" method="post" name="export_excel">
 
			<div class="previous">
				<div class="controls">
					<button type="submit" id="export" name="export" class="btn btn-warning button-loading float right" data-loading-text="Loading...">Export To Excel</button>
				</div>
			</div>
		</form> -->




<!-- <br><br><br>

<form action="export_pdf.php" method="post">
 
			<div class="next">
				<div class="controls">
					<button type="submit" id="export" name="create_pdf" class="btn btn-warning button-loading float right" data-loading-text="Loading...">Export To Pdf</button>
				</div>
			</div>
		</form> -->



<?php include('modal.php'); ?>

<div id="view"><?php include "view.php"; ?></div>

<script src="js/ajax.js"></script>

</div>

</body>
</html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">

        <style>
        .align-middle
        {
            vertical-align: middle !important;
        }
        
	   .table
       {
         border-collapse: collapse;
         border:3px solid #f1f1f1;
         width:1180px;
         letter-spacing: 1px;
         height: 300px;

        }
       td,th
       { 
          text-align: center;
          border:1px solid rgb(200,190,190);
          padding-right: 20px;
          padding-left: 20px;
       }
       tr:nth-child(even)
       {
           background-color:#e7e7e7bd;
       }
       </style>
</head>


<body>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>DESCRIPTION</th>
			<th>PRICE</th>
			<th>QUANTITY</th>
			<th>ACTIONS</th>
		
		</tr>
		<?php

        include('db_connection.php');

        $db = new Database();
		$conn = $db->db_connect();
		
		global $limit;

        $page = (isset($_POST['page']))? $_POST['page'] : 1;
		$no = (($page - 1) * $limit) + 1; 
		$limit =5; 

		
		$limit_start = ($page - 1) * $limit;

		
		
		if(isset($_POST['search']) && $_POST['search'] == true)
		{ 
		
			
			$param = '%'.mysqli_real_escape_string($conn, $keyword).'%';

			
		
			$sql = mysqli_query($conn, "SELECT * FROM product WHERE id LIKE '".$param."' OR name LIKE '".$param."' OR description LIKE '".$param."' OR price LIKE '".$param."' OR quantity LIKE '".$param."' LIMIT ".$limit_start.",".$limit);
            $sql2 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM product WHERE id LIKE '".$param."' OR name LIKE '".$param."' OR description LIKE '".$param."' OR price LIKE '".$param."' OR quantity LIKE '".$param."'");
			$result = mysqli_fetch_array($sql2);
		}
		else
		{ 

			$sql = mysqli_query($conn, "SELECT * FROM product LIMIT ".$limit_start.",".$limit);

			
			$sql2 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM product");
			$result = mysqli_fetch_array($sql2);
		}

		while($data = mysqli_fetch_array($sql))
		{ 
			?>
			<tr>
				<td class="align-middle"><?php echo $data['id']; ?></td>
				<td class="align-middle"><?php echo $data['name']; ?></td>
				<td class="align-middle"><?php echo $data['description']; ?></td>
				<td class="align-middle"><?php echo $data['price']; ?></td>
				<td class="align-middle"><?php echo $data['quantity']; ?></td>
				<td>
                <button class='btn btn-primary' onclick='GetUserDetails(<?=$data["id"]?>)'>Edit</button>
                <button class='btn btn-danger' onclick='DeleteUser(<?=$data["id"]?>)'>Delete</button>
                </td>
			</tr>
			<?php
			$no++;
		}
		?>
	</table>


    <?php
$count = mysqli_num_rows($sql);

if($count > 0)
{ 
    ?>
   
    <ul class="pagination">
    	<!-- LINK FIRST AND PREV -->
    	<?php
		if($page == 1)
		{
    	?>
    		<li class="disabled"><a href="#">First</a></li>
    		<li class="disabled"><a href="#">&laquo;</a></li>
    	<?php
		}
		else
		{ 
    		$link_prev = ($page > 1)? $page - 1 : 1;
    	?>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(1, false)">First</a></li>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_prev; ?>, false)">&laquo;</a></li>
    	<?php
    	}
    	?>

    	<!-- LINK NUMBER -->
    	<?php
    	$total_page = ceil($result['total'] / $limit); 
    	$total_number = 3; 
    	$start_number = ($page > $total_number)? $page - $total_number : 1; 
    	$end_number = ($page < ($total_page - $total_number))? $page + $total_number : $total_page; 

    	for($i = $start_number; $i <= $end_number; $i++){
    		$link_active = ($page == $i)? ' class="active"' : '';
    	?>
    		<li<?php echo $link_active; ?>><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $i; ?>, false)"><?php echo $i; ?></a></li>
    	<?php
    	}
    	?>

    	<!-- LINK NEXT AND LAST -->
    	<?php
		if($page == $total_page)
		{ 
    	?>
    		<li class="disabled"><a href="#">&raquo;</a></li>
    		<li class="disabled"><a href="#">Last</a></li>
    	<?php
		}
		else
		{ 
    		$link_next = ($page < $total_page)? $page + 1 : $total_page;
    	?>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_next; ?>, false)">&raquo;</a></li>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $total_page; ?>, false)">Last</a></li>
    	<?php
    	}
    	?>
    </ul>
    <?php
}
?>

</div>
     <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ajax.js"></script>   
</body>
</html>
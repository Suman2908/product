<?php

function generateRow()
{
		$contents = '';
        include('db_connection.php');
        $db = new Database();
        $conn = $db->db_connect();

		$sql = "SELECT * FROM product";

        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
			$contents .= "
			<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['description']."</td>
            <td>".$row['price']."</td>
            <td>".$row['quantity']."</td>
			</tr>
			";
		}
		
		
		return $contents;
	}

	require('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("Product table pdf");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '

      	<h4>Product Table</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="5%">ID</th>
				<th width="25%">Name</th>
				<th width="25%">Description</th>
                <th width="20%">Price</th> 
                <th width="20%">Quantity</th> 
                
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('products.pdf', 'I');
	

?>
<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("uoc-mydb-instance.ciaqpoqp6i0b.us-east-2.rds.amazonaws.com:3306", "jsproot", "jsprootpass", "jsp");  
      $sql = "SELECT * FROM sim ORDER BY SIM_No ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["SIM_No"].'</td>  
                          <td>'.$row["FSE_Id"].'</td>
                          <td>'.$row["PEF_Id"].'</td>  
                           
                          <td>'.$row["Customer_NIC"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }


 if(isset($_POST["generate_pdf"]))  
 {  
      require('../tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Download damaged card summery");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '   
      <table border="0" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="30%">SIM No</th>  
                <th width="10%">FSE ID</th>  
                <th width="15%">PEF Id</th>  
                <th width="45%">Customer NIC</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';
      //$content .= '<img src="/Images/SmarTID.png"  width="50" height="50">';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>PDF Generate</title>

       </head>  
      <body>  
                   
                      



                           <?php  
                               fetch_data();  
                            ?>  
                      
                      </body>  
 </html>
                     
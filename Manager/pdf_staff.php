<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("uoc-mydb-instance.ciaqpoqp6i0b.us-east-2.rds.amazonaws.com:3306", "jsproot", "jsprootpass", "jsp");  
      $sql = "SELECT * FROM employee ORDER BY Id ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["Id"].'</td>  
                          <td>'.$row["FirstName"].'</td>
                          <td>'.$row["LastName"].'</td>  
                           <td>'.$row["Gender"].'</td>
                          <td>'.$row["NIC"].'</td>
                           <td>'.$row["Type"].'</td>
                           <td>'.$row["EmpId"].'</td>

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
      $obj_pdf->SetTitle("Download");  
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

      <h1 align= "center"> JSP Enterprises </h1>
      <br><br>
      <hr>

      <br><br><br>

      <h2 align= "center"> Staff Details </h2>

      <br><br><br>

      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th >ID</th>  
                <th >First Name</th>  
                <th >Last Name</th>  
                <th >Gender</th>
                <th >NIC</th>
                <th >Type</th>
                <th >Epployee Id</th> 

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
                     
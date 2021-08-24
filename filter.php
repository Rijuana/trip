<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      include 'connection.php';  
      $output = '';  
      $query = "  
           SELECT * FROM trip  
           WHERE dt BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."' 
      ";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                <th width="5%"> SL</th>  
                <th width="30%">NAME</th>  
                <th width="43%">AGE</th>  
                <th width="10%">GENDER</th>  
                <th width="12%">EMAIL</th>
                <th width="12%">PHONE</th>  
                <th width="12%">OTHER</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["sno"] .'</td>  
                          <td>'. $row["name"] .'</td>  
                          <td>'. $row["age"] .'</td>  
                          <td>'.$row["gender"] .'</td>  
                          <td>'. $row["email"] .'</td>
                          <td>'. $row["phone"] .'</td>  
                          <td>'. $row["other"] .'</td>    
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>

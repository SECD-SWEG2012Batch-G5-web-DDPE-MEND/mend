 <?php  
      //export.php  
      $db = mysqli_connect("localhost", "root", "", "menddatabase");
 if(isset($_POST["exportc"]))  
 {  
    
   
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=customer.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('customer_id','custom_username', 'first_name','last_name', 'custom_email', 'custom_pass','subcity','kebele', 'woreda', 'sex', 'age', 'phonenum', 'image'));  
      $query = "SELECT * FROM customer_info ORDER BY customer_id DESC";  
      $result = mysqli_query($db, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  else if($_POST["exportw"])
 {
    header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=worker.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('worker_id','worker_username', 'first_name','last_name', 'worker_email', 'worker_pass','subcity', 'woreda','kebele', 'sex', 'age', 'phonenum', 'image'));  
      $query = "SELECT * FROM worker_info ORDER BY worker_id DESC";  
      $result = mysqli_query($db, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output); 



 }else if($_POST["exports"])
 {
    header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=order.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('request_id','request_descrip', 'request_dateTime','request_status', 'customer_id', 'worker_id','occuation_id'));  
      $query = "SELECT * FROM request ORDER BY request_id DESC";  
      $result = mysqli_query($db, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output); 



 }
 ?>  
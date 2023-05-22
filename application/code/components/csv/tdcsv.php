<?php 
 
// Load the database configuration file 
include_once 'connect.php'; 
 
// Fetch records from database 
$query = $con->query("SELECT * FROM ticket where tid = '". $id ."'"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Ticket" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('tid', 'iid', 'email', 'img', 'inquiry', 'itype', 'fdes', 'stat', 'priority', 'severity', 'filename', 'assignid', 'afname', 'alname', 'dt'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['tid'], $row['iid'], $row['email'], $row['img'], $row['inquiry'], $row['itype'], $row['fdes'], $row['stat'], $row['priority'], $row['severity'], $row['filename'], $row['assignid'], $row['afname'], $row['alname'], $row['dt']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>
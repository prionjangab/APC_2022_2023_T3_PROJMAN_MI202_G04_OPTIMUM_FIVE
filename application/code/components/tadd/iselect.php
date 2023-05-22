<?php
// get the selected value from the query string
$selectedValue1 = $_GET["selectedValue"];

// generate the HTML code for the next form element based on the selected value
if ($selectedValue1 == "Desktop") {$html2 = '<input type="number" name="is" id="is" value="2">';} 
elseif ($selectedValue1 == "Laptop") {$html2 = '<input type="number" name="is" id="is" value="2">';} 
else {$html2 = ' ';}

// return the HTML code
echo $html2;
?>

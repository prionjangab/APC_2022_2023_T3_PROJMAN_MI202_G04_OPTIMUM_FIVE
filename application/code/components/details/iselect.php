<?php
// get the selected value from the query string
$selectedValue = $_GET["selectedValue"];

// generate the HTML code for the next form element based on the selected value
if ($selectedValue == "Hardware") {
  // generate a select element with options
  
  $html = '
  <!--inquiry-->
                          <select name="inquiry" id="inquiry" >
                          <option value="Desktop">Desktop</option>
                          <option value="Laptop">Laptop</option>
                          <option value="Tablet">Tablet</option>
                          <option value="Camera">Camera</option>
                          <option value="Projector">Projector</option>
                          <option value="Others">Others</option>
                          </select>';

} elseif ($selectedValue == "Software") {
  // generate a textarea element
  $html = '
  <!--inquiry-->
                          <select name="inquiry" id="inquiry" >
                          <option value="Microsoft Teams">Microsoft Teams</option>
                          <option value="Outlook">Outlook</option>
                          <option value="VM Virtual Box">VM Virtual Box</option>
                          <option value="Cisco">Cisco</option>
                          <option value="Others">Others</option>
                          </select>';
} 
elseif ($selectedValue == "Account") {
  // generate a textarea element
  $html = '
  <!--inquiry-->
                          <select name="inquiry" id="inquiry" >
                          <option value="LinkedIn Accounts">LinkedIn Accounts</option>
                          <option value="APC Websites">APC Websites</option>
                          <option value="Others">Others</option>
                          </select>';
} 
elseif ($selectedValue == "Hyflex Equipment") {
  // generate a textarea element
  $html = '
                          <select name="inquiry" id="inquiry" >
                          <option value="Webcam">Webcam</option>
                          <option value="Projector">Projector</option>
                          <option value="Desktop">Desktop</option>
                          <option value="Laptop">Laptop</option>
                          <option value="Tablet">Tablet</option>
                          <option value="Camera">Camera</option>
                          <option value="Projector">Projector</option>
                          </select>';
} 
elseif ($selectedValue == "Borrowed Equipment") {
  // generate a textarea element
  $html = '
  <!--inquiry-->
                          <select name="inquiry" id="inquiry" >
                          <option value="Camera">Camera</option>
                          <option value="Drawing Tablet">Drawing Tablet</option>
                          <option value="Laptop">Laptop</option>
                          <option value="Others">Others</option>
                          </select>';
} 
elseif ($selectedValue == "Others") {
  // generate a textarea element
  $html = '<!--Inquiry-->
    <textarea class="textarea" name="inquiry" placeholder="Inquiry" id="inquiry" required ></textarea>';
} 

else {
  $html = ' ';
}

// return the HTML code
echo $html;
?>

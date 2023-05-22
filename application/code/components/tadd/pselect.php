<?php
$selected_value = $_GET['selected_value'];

// retrieve options for second select based on selected value of first select
// these options could come from a database, a file, or any other data source
$options = array();
if ($selected_value == '1') {
  $options = array('101', '102', '103', '104', '105', '106', '107', '108', '109', '110', '111', '112');
} elseif ($selected_value == '2') {
  $options = array('201', '202', '203', '204', '205', '206', '207', '208', '209', '210', '211', '212');
} elseif ($selected_value == '3') {
  $options = array('301', '302', '303', '304', '305', '306', '307', '308', '309', '310', '311', '312');
} elseif ($selected_value == '4') {
  $options = array('401', '402', '403', '404', '405', '406', '407', '408', '409', '410', '411', '412');
} elseif ($selected_value == '5') {
  $options = array('501', '502', '503', '504', '505', '506', '507', '508', '509', '510', '511', '512');
} elseif ($selected_value == '6') {
  $options = array('601', '602', '603', '604', '605', '606', '607', '608', '609', '610', '611', '612');
} elseif ($selected_value == '7') {
  $options = array('701', '702', '703', '704', '705', '706', '707', '708', '709', '710', '711', '712');
} elseif ($selected_value == '8') {
  $options = array('801', '802', '803', '804', '805', '806', '807', '808', '809', '810', '811', '812');
} elseif ($selected_value == '9') {
  $options = array('901', '902', '903', '904', '905', '906', '907', '908', '909', '910', '911', '912');
} elseif ($selected_value == '10') {
  $options = array('1001', '1002', '1003', '1004', '1005', '1006', '1007', '1008', '1009', '1010', '1011', '1012');
} elseif ($selected_value == '11') {
  $options = array('1101', '1102', '1103', '1104', '1105', '1106', '1107', '1108', '1109', '1110', '1111', '1112');
} elseif ($selected_value == '12') {
  $options = array('Atrium');
}

echo '<option value="">--- Select the room you are in ---</option>';
// output options as HTML
foreach ($options as $option) {
  echo "<option value=\"$option\">$option</option>";
}
?>

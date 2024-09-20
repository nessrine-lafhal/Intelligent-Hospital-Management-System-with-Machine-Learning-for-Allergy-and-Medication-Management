<?php
// Collect input data from form (you need to create an HTML form for this)
$patient_age = $_POST['patient_age'];
$patient_bloodgroup = $_POST['patient_bloodgroup'];
$patient_allergy = $_POST['patient_allergy'];
$bp_systolic = $_POST['bp_systolic'];
$bp_diastolic = $_POST['bp_diastolic'];
$vital_pulse = $_POST['vital_pulse'];
$vital_temp = $_POST['vital_temp'];
$stage = $_POST['stage'];

// Prepare data for Python script
$data = array(
    'patient_age' => $patient_age,
    'patient_bloodgroup' => $patient_bloodgroup,
    'patient_allergy' => $patient_allergy,
    'bp_systolic' => $bp_systolic,
    'bp_diastolic' => $bp_diastolic,
    'vital_pulse' => $vital_pulse,
    'vital_temp' => $vital_temp,
    'stage' => $stage
);

$data_json = json_encode($data);

// Call the Python script and pass the data
$command = escapeshellcmd("python3 predict.py '{$data_json}'");
$result = shell_exec($command);

// Display the result
echo "Prediction: " . $result;
?>

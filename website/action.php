<?php
$name = $_POST['name']
$age = $_POST['age']
$url = 'http://api:5000/pozos/api/v1.0/get_student_ages';

$data = array('key1' => $name, 'key2' => $age);
$username = 'toto';
$password = 'python';


$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => http_build_query($data),
        "header" => "Authorization: Basic " . base64_encode("$username:$password"),
    )
);
$context  = stream_context_create($options);
?>
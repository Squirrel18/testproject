<?php 
    $request = $_GET;
    $requestToJSON = json_encode($request) . "<br>";
    // echo $requestToJSON;
    $file_dummy = fopen("dummy.json", "r") or die ("failed open file");
    $data = fread($file_dummy, filesize("dummy.json"));
    // echo $data . "<br>";
    /* $data_array = json_decode($data);
    var_dump($data_array);
    echo "<br><br>";
    for($i = 0; $i < count($data_array); $i++) { 
		foreach($data_array[$i] as $key => $value) {
			echo "{$key} -> {$value} <br>";
		}
	} */
	echo $data;
?>
<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['firstname'])) {
    $suername = $_POST['suername'];
	$firstname = $_POST['firstname'];
    $contact = $_POST['contact'];
    $date1 = $_POST['date1'];
	$checkbox1 = $_POST['checkbox1'];
	$out = $_POST['out'];
	$movies = $_POST['movies'];
	$tv = $_POST['tv'];
	$radio1 = $_POST['radio1'];
	
        // if all the fields are filled (not empty)
        //insert data to database
		//, '$out', '$movies', '$tv', '$radio1'
		//, out, movies, tv, radio1
		//echo $checkbox1;
		if ($checkbox1 == 1)
	    {
			$checkbox1 = 'checkbox1';
		}
		if ($out == 1){
			$out = 'out1';
		}
		 echo $out;
        $result = mysql_query("INSERT INTO user (suername, firstname, contact, date1, checkbox1) VALUES ('$suername', '$firstname', '$contact', '$date1', '$checkbox1') ");
        if($result){
            //display success message
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='edit.php'>View Result</a>";
        }
        else
        {
            echo"cant create";
        }
}
else
{
	 echo"firstname is empty";	
}
?>
</body>
</html>
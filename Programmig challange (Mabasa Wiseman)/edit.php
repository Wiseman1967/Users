<?php
// including the database connection file
include_once("config.php");

//getting id from url

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM user");
while($res = mysql_fetch_array($result))
{
    $numbers ++;
}

$result = mysql_query("SELECT * FROM user WHERE date1 = (SELECT max(date1) FROM user)");
while($res = mysql_fetch_array($result))
{
    $name = $res['firstname'];
	$age = $res['date1'];
}
?>
<html>
<head>
    <title>View Survay</title>
</head>

<body>
    <a href="index.html">fill survey</a>
    <br/><br/>

    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Total number of surveys</td>
                <td><input type="text" name="name" value="<?php echo $numbers;?>"></td>
            </tr>
            <tr>
                <td>Average age</td>
                <td><input type="text" name="age" value="<?php echo $age;?>"></td>
            </tr>
            <tr>
                <td>Oldest person who participated in survey</td>
                <td><input type="text" name="email" value="<?php echo  $name;?>"></td>
            </tr>
			<tr>
                <td>Percentage of people who like pizaa</td>
                <td><input type="text" name="email" value="9"></td>
            </tr>
			<tr>
                <td>Percentage of people who like pasta</td>
                <td><input type="text" name="email" value="10"></td>
            </tr>
			<tr>
                <td>Percentage of people who like pap and wors</td>
                <td><input type="text" name="email" value="36"></td>
            </tr>
			<tr>
                <td>People like to eat out</td>
                <td><input type="text" name="email" value="56"></td>
            </tr>
			<tr>
                <td>People like to watch movies</td>
                <td><input type="text" name="email" value="37"></td>
            </tr>
			<tr>
                <td>People like to watch TV</td>
                <td><input type="text" name="email" value="40"></td>
            </tr>
			<tr>
                <td>Peoplelike to listne to the radio:</td>
                <td><input type="text" name="email" value="39"></td>
            </tr>
			
            
        </table>
    </form>
</body>
</html>
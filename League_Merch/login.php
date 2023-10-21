<?php
include_once("db.php");

$username=$_POST['uname'] ;
$password=$_POST['pass1'] ;
$sql_get_user_data = "SELECT * FROM `users` 
                                WHERE `username`= '$username' 
                                AND `password`= '$password'";
$user_result = mysqli_query($conn, $sql_get_user_data);

if (mysqli_num_rows($user_result) > 0) {

    echo "<hr>";
    echo "<hr3>Rows from the Database</h3>";
while($row = mysqli_fetch_assoc($user_result)) {
    echo "Fullname:" . $row['full_name'] . "<br>";
    echo "Username:" . $row['username'] . "<br>";
    echo "Password:" . $row['password'] . "<br>";
    echo "User Type [A = ADMIN / U = USER]:"; " . $row['user_type'] . "<br>";
    

    if($row['user_type'] == 'A')
    {
        header("location; admin.php");
    }
    else if ($row['user_type']=='0')
    {
        header("location: users/");
    }
    else{
        header("location: index.php");
    }
}
} else {
    header("location: index.php?error=404");
}


?>
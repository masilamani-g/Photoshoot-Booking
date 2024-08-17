<?php
$servername="localhost";
$username="root";
$password="";
$database_name="booking";

$conn=mysqli_connect($servername, $username, $password, $database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $function_type = $_POST['function_type'];
    $phone = $_POST['phone'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    $sql_query = "INSERT INTO booking_form (first_name, last_name, gender, email, function_type, phone, date1, date2)
    VALUES ('$first_name', '$last_name', '$gender', '$email', '$function_type', '$phone', '$date1', '$date2')";

    if(mysqli_query($conn, $sql_query))
    {
        echo "New Booking Details Inserted Successfully !";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
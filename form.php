<?php
$servername = "localhost";
$username = "debian-sys-maint";
$password = "7SiStlpQq4t02sGy";
$dbname = "hotel";

$user = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['useremail'];
$time = $_POST['time'];
$class = $_POST['category'];
$amount = $_POST['amount_guests'];

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO hotel (username, userphone, useremail, time_form, class, amount)
VALUES ('" . $user . "','" . $phone . "','" . $email . "','" . $time . "','" . $class . "','" . $amount . "')";

if ($conn->query($sql) === TRUE) {
  echo "Номер забронирован.\nКлиент: $user;\nНомер телефона: $phone;\nEmail: $email;\nДата бронирования: $time\nКоличество гостей: $amount\nКатегория номера: $class";
  
} else {
  echo "Error: " . $sql . "\n" . $conn->error;
}
$conn->close();
?> 
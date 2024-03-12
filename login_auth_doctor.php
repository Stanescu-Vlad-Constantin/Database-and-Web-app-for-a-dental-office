<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$database = "cabinetStomatologicDB";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $cnp = $_POST["pass"]; // Using CNP as password

    $sql = "SELECT idMedic, cnpMedic FROM tblMedici WHERE numeMedic = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($cnp == $row["cnpMedic"]) {
            $_SESSION["user_id"] = $row["idMedic"];
            header("Location: doctor_appointments.php");
        } else {
            echo "Invalid CNP (password)";
        }
    } else {
        echo "Invalid username";
    }
}

$conn->close();
?>
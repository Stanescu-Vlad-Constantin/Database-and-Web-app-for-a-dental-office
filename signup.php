<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $cnp = $_POST["cnp"];

    $sql = "INSERT INTO tblPacienti (numePacient, nrTelefonPacient, adresaMailPacient, cnpPacient) 
            VALUES ('$name', '$phone', '$email', '$cnp')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<?php

$serverName = "localhost";
$userName = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$serverName;dbame=users", $userName, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // INSERT THE VALUE
    // $sql = "INSERT INTO users.studentdb (stdRoll,stdName,stdAddress,stdEmail)
    //     VALUES (3,'Robin','UK','rabin123@gmail.com')";
    // $conn->exec($sql);
    // echo "New record created successfully";

    //FETCH THE VALUES
    $stmt = $conn->prepare("SELECT * FROM users.studentdb");
    // $stem = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo $students;
    // die;
    // echo '<pre>';
    // print_r($studets);
    // die;

    foreach ($students as $student) {
        echo $student['stdRoll'] . " " .
            $student['stdName'] . " " .
            $student['stdAddress'] . " " .
            $student['stdEmail'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

$conn = null;

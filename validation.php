<?php
// include 'connectiondb.php';

$username = $_POST['username'];
$password = $_POST['password'];

// $stmt = $conn->prepare("SELECT * FROM test.logindb WHERE 
//         '$username'==username && '$password'==password");

// $stmt->execute();
// echo $stmt->count;

$serverName = "localhost";
$userName = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$serverName;dbame=test", $userName, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //FETCH THE VALUES
    $stmt = $conn->prepare("SELECT * FROM test.logindb");
    $stmt->execute();
    $login = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($login as $log) {
        //     echo $log['username'] . "<br>" .
        //         $log['password'];
        // }
        if ($log['username'] == $username && $log['password'] == 'toor') {
            echo "TRUE";
            echo $log['username'];

            header('Location: home.html');
        } else {
            echo "FALSE";
            die;
            header('Location: index.html');
        }
    }
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

$conn = null;

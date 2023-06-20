<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websepatualif";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
// else {
//     echo "Berhasil mas";
// }

// $username = $_POST['Username'];
// $email = $_POST['Email'];
// $password = $_POST['Password'];
// $konfirmasiPassword = $_POST['KonfirmasiPassword'];

// if($conn->connect_error){
//     die('Connection failed : ' .$conn->connect_error );
// }
// else{
//     $stmt = $conn->prepare("insert into websepatualif ('Username)','Email','Password','KonfirmasiPassword') values(?, ?, ?, ?");
//     $stmt->bind_param("ssss", $username, $email, $password, $konfirmasiPassword);
//     $stmt->execute();
//     $stmt->close();
//     $conn->close();
// }
if (isset($_POST['UserBtn'])) {
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $konfirmasiPassword = $_POST['KonfirmasiPassword'];

    $query = "INSERT INTO user (Username, Email, Password, KonfirmasiPassword) VALUES ('$username', '$email', '$password', '$konfirmasiPassword')";

    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
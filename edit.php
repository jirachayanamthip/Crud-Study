<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM Users WHERE Id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "UPDATE Users SET Name='$name', Email='$email', Age='$age' WHERE Id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['Name']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row['Email']; ?>" required><br>
        Age: <input type="number" name="age" value="<?php echo $row['Age']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>

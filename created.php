<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "INSERT INTO Users (Name, Email, Age) VALUES ('$name', '$email', '$age')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
     <!-- Tailwind CSS via CDN -->
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900">
    <h2 class="flex justify-center text-white text-3xl font-bold">Create New User</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Age: <input type="number" name="age" required><br>
        <input type="submit" value="Create">
    </form>
    <a href="index.php">Back to list</a>
</body>
</html>

<?php
include 'connect.php';

$sql = "SELECT * FROM Users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Crud-App</title>
    <!-- LinkSheed CSS -->
    <link rel="stylesheet" href="https://path-to-linksheed-stylesheet.css">

    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/b5d6653424.js" crossorigin="anonymous"></script>
</head>

<body class=" bg-gray-900 ">
    <div class="flex justify-center text-white text-3xl font-bold">
        <h2>List</h2>
    </div>

    <div class="flex justify-end mr-6 ">
        <a class="py-2 px-4 bg-yellow-500 rounded-lg text-white font-bold" href="created.php"><i class="fa-solid fa-plus mr-2"></i>Create</a>
    </div>

    <div class="hidden sm:block bg-gray-700 mt-10 ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-white uppercase bg-gray-700 ">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Age</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <thead class='text-white underline'>
                        <tr>
                        <td scope='col' class='px-6 py-3'>" . $row["Id"] . "</td>
                        <td scope='col' class='px-6 py-3'>" . $row["Name"] . "</td>
                        <td scope='col' class='px-6 py-3'>" . $row["Email"] . "</td>
                        <td scope='col' class='px-6 py-3'>" . $row["Age"] . "</td>
                        <td scope='col' class='px-4 py-3' class=''>
                            <a class='p-2 bg-yellow-500 rounded-md fa-solid fa-pen-to-square' href='edit.php?id=" . $row["Id"] . "'></a>
                            <a class='p-2 bg-red-500 rounded-md fa-solid fa-trash' href='delete.php?id=" . $row["Id"] . "'></a>
                        </td>
                    </tr>
                    </thead>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No users found</td></tr>";
                }
                $conn->close();
                ?>
            </thead>
        </table>
    </div>

    <div class="text-white">
        <?php
        if ($result->num_rows > 0) {
            $result->data_seek(0);
            while ($row = $result->fetch_assoc()) {
                echo "
    <div class='block m-6 max-w-full bg-gray-700 border border-gray-700 text-white rounded-lg sm:hidden'>
                <div class='m-4'>
                    <div class='grid grid-cols-1 gap-2'>
                        <p>" . $row["Name"] . "</p>
                        <p>" . $row["Email"] . "</p>
                        <p>" . $row["Age"] . "</p>
                    </div>
                    <div class='flex justify-end mt-2'>
                        <a class='p-2 bg-yellow-500 rounded-md fa-solid fa-pen-to-square mr-2' href='edit.php?id=" . $row["Id"] . "'></a>
                        <a class='p-2 bg-red-500 rounded-md fa-solid fa-trash' href='delete.php?id=" . $row["Id"] . "'></a>
                    </div>
                </div>
    </div>";
            }
        } else {
            echo "
         <div class='block m-6 max-w-full bg-gray-700 border border-gray-700 text-white rounded-lg sm:hidden'>
                <div class='m-4'>
                <p>No users found</p>
                </div>
            </div>";
        }
        ?>
    </div>

</body>

</html>
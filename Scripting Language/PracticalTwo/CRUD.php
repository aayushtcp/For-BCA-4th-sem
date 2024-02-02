<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<style>
    * {
        font-family: sans-serif;
    }

    .overlay {
        display: none;
        width: 400px;
        height: 80vh;
        background-color: violet;
        border-radius: 8px;
        padding: 20px;
    }

    .overlay h3 {
        text-align: center;
        border: 2px solid red;
        border-radius: 5px;
        padding: 5px;
        cursor: pointer;
        float: end;
    }
</style>

<body>
    <h3>This is just simple CRUD</h3>
    <button name="mybtn" onclick="openPopup()">Add Employee</button>
    <div class="overlay" id="overlay">
        <!-- for Create or INsert -->
        <form action="" method="post" name="form1">
            <input type="text" name="name" placeholder="Name">
            <br>
            <br>
            <input type="text" name="phone" placeholder="Phone">
            <br>
            <br>
            <input type="text" name="address" placeholder="Address">
            <br>
            <br>
            <input type="submit" value="Add Employee">
        </form>


        <h3 onclick="closePopup()">Close</h3>
    </div>
    <script>
        var popup = document.getElementById("overlay");

        function openPopup() {
            popup.style.display = "block";
        }

        function closePopup() {
            popup.style.display = "none";
        }
        // create
    </script>
    <?php
    $conn = new mysqli("localhost", "root", "", "employee");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name'], $_POST['phone'], $_POST['address'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $sql = "INSERT INTO employee(id, name, phone, address) VALUES ('',$name','$phone', '$address')";
            if ($sql) {
                echo "Employee added successfully";
            } else {
                echo "Employee not added";
            }
        } else {
            echo "Unknown form submitted!";
        }
    }
    ?>
</body>

</html>
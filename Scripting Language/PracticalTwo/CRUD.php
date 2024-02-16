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
    <h3>This is just a simple CRUD</h3>
    <button name="mybtn" onclick="openPopup()">Add Employee</button>

    <div class="overlay" id="overlay">
        <form action="" method="post" name="form1">
            <!-- Create or Insert Form -->
            <input type="text" name="name" placeholder="Name">
            <br><br>
            <input type="text" name="phone" placeholder="Phone">
            <br><br>
            <input type="text" name="address" placeholder="Address">
            <br><br>
            <input type="submit" value="Add Employee">
        </form>
        <h3 onclick="closePopup()">Close</h3>
    </div>

    <div class="overlay" id="overlay2">
        <form action="" method="post" name="form2">
            <!-- Update Form -->
            <h3>Update form</h3>
            <input type="hidden" name="employee_id" id="employee_id">
            <input type="text" name="updatename" placeholder="New Name">
            <br><br>
            <input type="text" name="updatephone" placeholder="New Phone">
            <br><br>
            <input type="text" name="updateaddress" placeholder="New Address">
            <br><br>
            <input type="submit" value="Update">
        </form>
        <h3 onclick="closePopup()">Close</h3>
    </div>

    <script>
        var popup = document.getElementById("overlay");
        var popup2 = document.getElementById("overlay2");

        function openPopup() {
            popup.style.display = "block";
        }

        function openPopup2(employeeId) {
            document.getElementById("employee_id").value = employeeId;
            popup2.style.display = "block";
        }

        function closePopup() {
            popup.style.display = "none";
            popup2.style.display = "none";
        }
    </script>
    <?php
    $conn = new mysqli("localhost", "root", "", "myemployees");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // create a new employee
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $sql = mysqli_query($conn, "INSERT INTO employee (name, phone, address) VALUES ('$name', '$phone', '$address')");
            if ($sql) {
                echo "Employee added successfully";
            } else {
                echo "Employee not added";
            }
        }

        // update the details
        if (isset($_POST['updatename'])) {
            $employeeId = $_POST['employee_id'];
            $updatename = $_POST['updatename'];
            $updatephone = $_POST['updatephone'];
            $updateaddress = $_POST['updateaddress'];
            $sql = mysqli_query($conn, "UPDATE employee SET name='$updatename', phone='$updatephone', address='$updateaddress' WHERE id='$employeeId'");
            if ($sql) {
                echo "Employee updated successfully";
            } else {
                echo "Employee not updated";
            }
        }
    }

    // delete system
    if (isset($_GET['delete_id'])) {
        $deleteId = $_GET['delete_id'];
        $sql = mysqli_query($conn, "DELETE FROM employee WHERE id='$deleteId'");
        if ($sql) {
            echo "Employee deleted successfully";
        } else {
            echo "Employee not deleted";
        }
    }

    // read system
    $result = mysqli_query($conn, "SELECT * FROM employee");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employeeId = $row['id'];
            echo "<br>Name: " . $row['name'] . ", Phone: " . $row['phone'] . ", Address: " . $row['address'] . " - ";
            echo "<button onClick='openPopup2($employeeId)'>Edit</button>";
            echo " <a href='?delete_id=$employeeId'>Delete</a>";
        }
    } else {
        echo "No employees found";
    }
    ?>
</body>

</html>
<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" href="crud.css" type="text/css">
</head>
<body>
    <h3>This is just a simple CRUD</h3>
    <button name="mybtn" onclick="openPopup()">Add Employee</button>
    <div class="overlay" id="overlay">
        <form action="" method="post" name="form1">
            <!-- Create or Insert Form -->
            <input type="text" name="fname" placeholder="fname">
            <br><br>
            <input type="text" name="lname" placeholder="lname">
            <br><br>
            <input type="email" name="email" placeholder="Email">
            <br><br>Gender<br>
            <input name="gender" type="radio" value="M">Male
            <input name="gender" type="radio" value="F">Female
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
            <input type="text" name="updatefname" placeholder="New First Name">
            <br><br>
            <input type="text" name="updatelname" placeholder="New Last Name">
            <br><br>
            <input type="email" name="updateemail" placeholder="New Email">
            <br><br>
            Gender
            <br>
            <input type="radio" name="updategender" value="M">Male
            <input type="radio" name="updategender" value="F">Female
            <br><br>
            <input type="submit" value="Update">
        </form>
        <h3 onclick="closePopup()">Close</h3>
    </div>
    <script src="crud.js"></script>
    <?php
    $conn = new mysqli("localhost", "root", "", "myemployees");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // create a new employee
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['fname'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $sql = mysqli_query($conn, "INSERT INTO scriptingLanguage (fname, lname, email, gender) VALUES ('$fname', '$lname', '$email', '$gender')");
            if ($sql) {
                echo "Employee added successfully";
            } else {
                echo "Employee not added";
            }
        }
        // update the details
        if (isset($_POST['updatefname'])) {
            $employeeId = $_POST['employee_id'];
            $updatefname = $_POST['updatefname'];
            $updatelname = $_POST['updatelname'];
            $updateemail = $_POST['updateemail'];
            $updategender = $_POST['updategender'];
            $sql = mysqli_query($conn, "UPDATE scriptingLanguage SET fname='$updatefname', lname='$updatelname', email='$updateemail' WHERE id='$employeeId'");
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
        $sql = mysqli_query($conn, "DELETE FROM scriptingLanguage WHERE id='$deleteId'");
        if ($sql) {
            echo "Employee deleted successfully";
        } else {
            echo "Employee not deleted";
        }
    }
    // read system
    $result = mysqli_query($conn, "SELECT * FROM scriptingLanguage");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employeeId = $row['id'];
            echo "<br>First Name: " . $row['fname'] . ", Last Name: " . $row['lname'] . ", Email: " . $row['email'] . ", Gender: " . $row['gender'] . " - ";
            echo "<button onClick='openPopup2($employeeId)'>Edit</button>";
            echo " <a href='?delete_id=$employeeId'>Delete</a>";
        }
    } else {
        echo "No employees found";
    }
    $conn->close();
    ?>
</body>
</html>
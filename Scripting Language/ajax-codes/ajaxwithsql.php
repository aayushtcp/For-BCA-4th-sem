<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX and PHP</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>

    <h3>Ajax Example with Jquery and SQL</h3>
    <form action="" method="post" onsubmit="ClickHere(event)">

        Name: <input type="text" id="name">
        <br>
        <br>
        Phone: <input type="text" id="phone">
        <br>
        <br>
        Address: <input type="text" id="address">
        <br>
        <br>
        <input type="submit" value="Add">
    </form>
    <div id="response">

    </div>

    <script>
        function ClickHere(e) {
            e.preventDefault();
            var name = $("#name").val();
            var phone = $("#phone").val();
            var address = $("#address").val();

            $.ajax({
                url: 'dummy2.php',
                type: 'post',
                data: {
                    name: name,
                    phone: phone,
                    address: address
                },
                success: function(response) {
                    $('#response').html(response);
                },
                error: function() {
                    alert("There is something Error performing AJAX Call");
                }
            }); 
        }
    </script>
</body>

</html>
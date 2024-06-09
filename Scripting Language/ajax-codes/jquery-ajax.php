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
    
    <h3>Ajax Example with Jquery</h3>
    <input type="text" id="name">
    <a href="javascript:void(0)" onclick="ClickHere()">Test Ajax</a>

    <script>
        function ClickHere(){   
            var name = $("#name").val();

            $.ajax({
                url : 'dummy.php',
                type: 'post',
                data : {name:name},
                success : function(result){
                    alert(result);
                },
                error: function(){
                    alert("There is something Error performing AJAX Call");
                }
            });
        }
    </script>
</body>
</html>
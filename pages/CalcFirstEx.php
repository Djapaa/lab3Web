<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body class="body">
    <div class="container">
        
        <!-- <a class="header_reg__title" href="/index.php"><h1>LOGO</h1></a> -->
        <form class =" formtask" name="formtask" action="">
            <textarea class="input-task" value="" name ="textarea" ></textarea>
            <input class="button-task" type="button" value=" " onclick="add(value)">
        </form>
        
        <form class =" formtask" name="formtask3" action="">
            <input class="input-task" type="text" id="num1" oninput="onlyNumber(this)">
            <input class="input-task" type="text" id="num2" oninput="onlyNumber(this)">
            <input class="button-task" type="button" value="submit" onclick="plus()">
           
        </form>
        
    </div>
</body>
<script src="/JsFils/task.js"></script>
</html>
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
        
        <form class="form" id="form">
            <input name="textarea" placeholder="Поле1" id="input">
          
            <select id="UsersList" name="optionslist">
                <option value="Option 1">Опция 1</option>
                <option value="Option 2">Опция 2</option>
                <option value="Option 3">Опция 3</option>
            </select>
            <input type="button" id="AddButton" value="Добавить значение" onclick="Add()">
            <input type="button" id="ShuffleButton" value="Пермешать" onclick="shuffle()">
            <input type="button" id="LastOptionButton" value="Вывести свойство" onclick="LastOption()">
            <input type="button" id="printArrayButton" value="Вывести массив" onclick="printArray()">
        
        </form>
        
    </div>
</body>
<script src="/JsFils/ClassLab.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body class ="body">
    <div class="container ">
        <!-- <a class="header_reg__title" href="/index.php"><h1>LOGO</h1></a> -->
        <div class ="calc-wrapper">
            <div class ="calc-inner">
                <form name="form" action="">
                    <input class="textview" id="textview"value="" oninput="onlyNumber(this)">
                </form>
                <table>
                    <tr>
                        <td><input class="button-calc button-calc__active" type="button" value="С" onclick="clean()"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="x^2" onclick="degree()"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="<-" onclick="backspace()"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="%" onclick="add(value)"></td>
                    </tr>
                    <tr>
                        <td><input class="button-calc button-calc__active" type="button" value="1" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="2" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="3" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="/" onclick="add(value)"></td>
                    </tr>
                    <tr>
                        <td><input class="button-calc button-calc__active" type="button" value="4" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="5" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="6" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="*" onclick="add(value)"></td>
                    </tr>
                    <tr>
                        <td><input class="button-calc button-calc__active" type="button" value="7" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="8" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="9" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="-" onclick="add(value)"></td>
                    </tr>
                    <tr>
                        <td><input class="button-calc button-calc__active" type="button" value="." onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="0" onclick="add(value)"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="=" onclick="equals()"></td>
                        <td><input class="button-calc button-calc__active" type="button" value="+" onclick="add(value)"></td>
                    </tr>
                    
        </table>
    </div>
    </div>
</div>
</body>
<script src="/JsFils/calc.js"></script>
</html>
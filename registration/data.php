<?php 
session_start();

$full_name = $_POST['Name'] ;'<br>';
htmlspecialchars($full_name);
$Surname = $_POST['Surname'] '<br>'; 
htmlspecialchars($Surname) ;
$email = $_POST['email'] '<br>'; 
htmlspecialchars($email);
$password = $_POST['password'] '<br>'; 
htmlspecialchars($password);
if (empty($full_name))
echo "<b>Укажите имя</b><br>";
if (empty($Surname))
echo "<b>Укажите фамилию</b><br>";
if (empty($email))
echo "<b>Укажите емайл</b><br>";
if (empty($password))
echo "<b>Укажите пароль</b><br>";
else{
    echo "full_name: " .  $full_name . "<br>";
    echo "Surname: " .  $Surname ."<br>";
    echo "email: " .  $email ."<br>";
    echo "password: " .  $password ."<br>";
    
}
print_r( $_POST);
print_r( $_FILES);


if($_FILES['userfile']['error']>0)
{
    echo"Ошибка ";
    
    switch ($_FILES['userfile']['error'])
    {
        case 1:
            echo" Размер файла больше допустимого";
        break;
        case 2:
            echo"Размер файла больше допустимого(max_file_size)";
        break;
        case 3:
            echo" Загружена только часть файла";
         break;
        case 4:
            echo"Файл не был загружен";
        break;
        case 6:
            echo"Загрузка невозможна не задан временный каталог";
        break;
        case 7:
            echo"Загрузка не выполнена невозможна запись на диск";
        break;
    }
    exit();

}

$fileTmpPath = $_FILES['userfile']['tmp_name'];
$fileName = $_FILES['userfile']['name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $fileName) . '.' . $fileExtension;

$limitBytes  = 1024*1024*5;

if (filesize($fileTmpPath) > $limitBytes) die('Размер изображения не должен превышать 5 Мбайт.');

$allowedfileExtensions = array('jpg', 'png', 'jpeg');
if (in_array($fileExtension, $allowedfileExtensions)) 
{
    $uploadFileDir = 'uploads/';
        $dest_path = $uploadFileDir . $newFileName;
        


        if(move_uploaded_file($fileTmpPath, $dest_path))
        {
         echo 'File is successfully uploaded.';
        }
        else
        {
            echo'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
        }
}
else{
    echo 'НЕ изображение';
}




$wimage = "";
$fimg = "";
$path = "uploads/"; // задаем путь до сканируемой папки с изображениями
$images = scandir($path); // сканируем папку
    if ($images !== false) 
    { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
        if (is_array($images)) 
        { // если изображения найдены
                foreach($images as $image) 
                { // делаем проход по массиву
                    $fimg .= "<img src='".$path.htmlspecialchars(urlencode($image))."' alt='".$image."' />";
                }
            $wimage .= $fimg;
        }
        else
            { // иначе, если нет изображений
                $wimage .= "<div style='text-align:center'>Не обнаружено изображений в директории!</div>\n";
            }
    } 
    else {
        // иначе, если директория пуста или произошла ошибка
        $wimage .= "<div style='text-align:center'>Директория пуста или произошла ошибка при сканировании.</div>";
    }
    echo $wimage; // выводим полученный результат

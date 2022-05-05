<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 30%;
        }
        td{
            border: 1px solid #000;
        }
    </style>
    <?php
        // $msg = [
        //         'Файл успешно загружен',
        //         'Данный формат не поддерживается',
        //         'Ошибка загрузки',
        //         'Недопустимый размер файла'

        // ];

        
        if(isset($_GET['data']) && !empty($_GET['data'])){
            $data = json_decode($_GET['data']);
            echo "<p>".$data->name."</p>";
            echo "<p>".$data->surname."</p>";
            echo "<p>".$data->gender."</p>";
            echo "<img src='$data->diplom'>";
            
            // switch($data){
            //     case '0': echo "<p>{$msg['0']}</p>"; break;
            //     case '1': echo "<p>{$msg['1']}</p>"; break;
            //     case '2': echo "<p>{$msg['2']}</p>"; break;
            //     case '3': echo "<p>{$msg['3']}</p>"; break;
            // }


            // echo "<p>$data</p>";
        }
        
    ?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name">Введите имя
        <input type="text" name="surname">Введите фамилию
        <input type="radio" name="gender" checked value="m">М
        <input type="radio" name="gender" value="w">Ж
        <input type="file" name="my_file">прикрепите файл диплома
        <button type="submit">Send</button>

    </form>
</body>
</html>
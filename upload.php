<?php
    // print_r($_FILES);
    // $directory = './';
    // $hash = md5(date("Y-m-dh-m-s")). basename($_FILES['my_file']['name']);
    // $uploadfile = $directory .$hash;
    // // if($_FILES['my_file']['size'] > 4000){
    // //     $data = json_encode(['status' => 'error size', 'data' => 'Недопустимый размер файла']);
    // //         header("location: form.php?data=".$data);
    // //     die(); 
    // // }
    
    
    // if ($_FILES['my_file']['type'] == "image/gif"){
    //    if (move_uploaded_file($_FILES['my_file']['tmp_name'], $uploadfile)) {

    //         $data = json_encode(['status' => 'ok', 'data' => 'Файл успешно загружен']);
    //         header("location: form.php?data=".$data);
    //         die();
            
    //     } else {
    //         //ошибка загрузки
    //         $data = json_encode(['status' => 'error load', 'data' => 'Ошибка загрузки']);
    //         header("location: form.php?data=".$data);
    //         die();

    //     } 
    // }
    // else{
    //     //не верный тип
    //     $data = json_encode(['status' => 'error type', 'data' => 'Данный формат не поддерживается']);
    //     header("location: form.php?data=".$data);
    //     die();

    // }
    print_r($_POST);
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    print_r($_FILES);
    $directory = './';
    $hash = md5(date("Y-m-dh-m-s")). basename($_FILES['my_file']['name']);
    $uploadfile = $directory .$hash;


    if(isset($_POST) && isset($_FILES)){
        if (move_uploaded_file($_FILES['my_file']['tmp_name'], $uploadfile)){
            $data = json_encode(['diplom' => $uploadfile, "name" => $name, "surname" => $surname, "gender" =>$gender]);
            header("location: form.php?data=".$data);
        }
        // $data = json_encode(["name" => $name, "surname" => $surname, "gender" =>$gender]);
        // header("location: form.php?data=".$data);
    }
    
    // if ($_FILES['my_file']['type'] == "image/gif"){
    //     if (move_uploaded_file($_FILES['my_file']['tmp_name'], $uploadfile)){
    //         $data = json_encode(['diplom' => $uploadfile]);
    //         header("location: form.php?data=".$data);
    //     }
    // }
?>


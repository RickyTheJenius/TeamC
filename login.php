<?php
    include './data/config.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];

        $filestudents = fopen('./data/user_info.json','r');
        $Arraystudents = json_decode(fread($filestudents,filesize('./data/user_info.json')),true);
        fclose($filestudents);

        if($role == 'admin'){
            if($id=='nao@admin.com' && $pass == 'naoaoyama'){
                $_SESSION['logUser'] = 'admin';
                    header("Location: ".$baseName.'admin.php');
                    exit();
            }
        }elseif($role =='students'){
            foreach($Arraystudents as $students){
                if($students['uid'] == $id && $students['pass'] == $pass){
                    $_SESSION['logUser'] = $students;
                    header("Location: ".$baseName.'student.php');
                    exit();//done with the function
                }else{
                    echo "not found";
                }
            }
        }
    }
    
    
?>

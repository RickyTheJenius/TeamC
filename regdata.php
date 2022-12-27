<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $id= $_POST['id'];
    $pass= $_POST['pass'];

    $userpat="./data/data.json";
if(file_exists($userpat)){
    $file= fopen($userpat,'r');
    $dataArray = json_decode(fread($file,filesize($userpat)),true);
    fclose($file);

    
}else{
    $dataArray=[];
}

    $user = [
        $name, $email, $id, $pass 
    ];

    array_push($dataArray,$user);
    $file = fopen($userpat,'a');
    fwrite($file,json_encode($user));
    fclose($file);

    exit();

}

?>


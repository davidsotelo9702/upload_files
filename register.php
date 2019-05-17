<?php

    include ("databases.php");
    $idNumber = $_POST['ide'];

    $file_name=$_FILES['photo']['name'];
    $file_type=$_FILES['photo']['type'];
    $file_size=$_FILES['photo']['size']/1024;

    $file_tmp =$_FILES['photo']['tmp_name'];
  //echo $idNumber."<br>".$file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp;
    move_uploaded_file($_FILES['photo']['tmp_name'],"photos /".$_FILES['photo']['name']);
    $photo_url_db ="photos/".$_FILES['photo']['name'];
    $sql="INSERT INTO users (id_number,photo) VALUES ($idNumber,'$photo_url_db')";
    $conn->query($sql);

    echo "<script language='javascript'>alert('::: User has been resgistered :::')</script>";
    header("refresh:0;url=index.html");


?>

<?php
include('./admin/constant/connect.php'); 
date_default_timezone_set("Asia/Bangkok");
if(isset($_POST['save_multiple_data']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
     $name1 = $_POST['name1'];
    $phone1 = $_POST['phone1'];
    $s_email = $_POST['email'];
    $time = date("Y-m-d");
     

    $oida = date("Y.m.d").".".$name1.".".$phone1;
     $oids = md5($oida);

    foreach($name as $index => $names)
    {
   
    $s_name = $names;
    $s_phone = $phone[$index];
    
        // $s_otherfiled = $empid[$index];

        $query = "INSERT INTO orders (order_date,oderlog,productid,pces,email,name,tel,price) VALUES ('$time','$oids','$s_name','$s_phone','$s_email','$name1','$phone1',(select catalt from categories where categories_id = '$s_name' ))";
        $query_run = mysqli_query($connect, $query);
    }

    if($query_run)
    {
      
        header("Location: receipt.php?id=$oids");
        exit(0);
    }
    else
    {
       
        header("Location: contact.php");
        exit(0);
    }
}
?>
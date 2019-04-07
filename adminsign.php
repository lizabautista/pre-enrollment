<?php
    $conn=mysqli_connect("localhost","root","","demo");
        if(!$conn){
            die("Error in stablishing connection to the server!");
    }
    if(isset($_POST['un']) && isset($_POST['sub'])){
        $un=$_POST['un'];
        $pw=$_POST['pw'];
        $qry="select * from adminsign;";
        //die($qry);
        $result=mysqli_query($conn, $qry);


    }else{
     header('location: index.html');
    }
    ?>
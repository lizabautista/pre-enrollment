<HTML>
<?php
    $db = mysqli_connect("localhost","root","","demo");
    
    if (isset($_POST['submit'])) {
    $id = ($_POST['id']);
    $subcode = $_POST['subcode'];
    $subdec = $_POST['subdec'];
    $subsection = $_POST['subsection'];
    $subunit= $_POST['subunit'];

    $sql_up = "UPDATE subject SET id='$id',subcode='$subcode',subdec='$subdec',subsection='$subsection',subunit='$subunit'WHERE id={$id}";


    if(mysqli_query($db,$sql_up)){
        header("location: subjectread.php");
    }
    else {
        echo "Error: ".$sql_up."<br>".mysqli_error($db);
    } 
}
    mysqli_close($db);
    ?>
</HTML>


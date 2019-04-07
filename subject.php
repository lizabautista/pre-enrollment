
<?php
include("./sections/header.php");
?>

<style>
#dabox{
	width: 500px;
	height: 50px;
	position: fixed;
	left: 20%;
	top: 20%;
	margin-left: 150px;
	margin-top: -100px;
}
</style>

</head>


<body>
  <div class='card' id='dabox'>
  	<div class='card-header bg-info'>
  		<center><h5>Student Records</h5></center>
    </div>


  <div class='card-body'>
  <form method='POST' action='subcreate.php' name='form'>
    <input type="hidden" name="id" id="id" placeholder="ID" class="form-control">
    <br>
    <input type="Text" name="subcode" id="subcode" placeholder="Subject Code" class="form-control">
    <br>
  <input type="Text" name="subdec" id="subdec" placeholder="Subject Description" class="form-control">
    <br>
   <input type="Text" name="subsection" id="subsection" placeholder="Subject Section" class="form-control">
    <br>
   <input type="Text" name="subunit" id="subunit" placeholder="Subject Unit" class="form-control">
    <br>
   

<center>
    <input type='submit' class='btn btn-success' value='Submit' name='submit' id='submit'>
    <a href="subjectread.php" class="btn btn-success" role="button">View</a>
    
</center>

  </form>
 </body>
 </html> 

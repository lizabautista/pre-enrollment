
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
  <form method='POST' action='update.php' name='form'>

  <input type="hidden" name="id" id="id" placeholder="ID" class="form-control">
    <br>
    <input type="Text" name="idnum" id="idnum" placeholder="ID Number" class="form-control">
    <br>
  <input type="Text" name="firstname" id="firstname" placeholder="First Name" class="form-control">
    <br>
   <input type="Text" name="middlename" id="middlename" placeholder="Middle Name" class="form-control">
    <br>
   <input type="Text" name="lastname" id="lastname" placeholder="Last Name" class="form-control">
    <br>
   <input type="Text" name="Course" id="Course" placeholder="Course" class="form-control">
    <br>
   <input type="Text" name="Year" id="Year" placeholder="Year" class="form-control">
    <br>
  <label><input type="radio" name="Sex" id="Sex" value="Male" placeholder="Sex" checked>Male</label> 
   <label><input type="radio" name="Sex" id="Sex" value="Female" placeholder="Sex" checked>Female</label> 
  

 </select>
    <br>
   
    

<center>
    <input type='submit' class='btn btn-success' value='Submit' name='submit' id='submit'>
    <a href="studread.php" class="btn btn-success" role="button">View</a>
    
</center>

  </form>
 </body>
 </html> 

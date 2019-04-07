<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>read</title>
      <!-- Meta Tags -->
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<meta name="keywords" content="Preparation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- // Meta Tags -->
      <!--booststrap-->
      <link href="css/homepage_bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
		<link href="css/UC_homepage_style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
     <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
   </head>
   <body>
<html>
<div class="manageMember">
    <br><a href="student.php"><button type="button">Add Student</button></a></br>
    <br><table border="1" cellspacing="10" cellpadding=5>
        <h3>Student Records</h3>
        <thead>
            <tr>
            	<th>ID </th>
                <th>ID Number</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Sex</th>
                <th>Actions</th>
            </tr>

        </thead>
        <tbody>

          <?php
            $db = mysqli_connect("localhost","root","","demo");
    		$result = mysqli_query($db,"SELECT*FROM student");

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    	<td>".$row['id']."</td>
                        <td>".$row['idnum']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['middlename']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['Course']."</td>
                        <td>".$row['Year']."</td>
                        <td>".$row['Sex']."</td>
                        <td>
                            <a href='studup.php?id=".$row['id']."'><button type='submit' value='edit' >Edit</button></a>
                            <a href='del.php?idnum=".$row['idnum']."'><button type='submit' value='remove' id='remove' name='remove'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>

        </tbody>
    </table>
</div>


</body>
</html>

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
  <br> <a href="subject.php"><button type="button">Add Subject</button></a></br>

    <br><table  border="2" cellspacing="10" cellpadding="10" width="800px" height="100px">
      <h3>Subject List</h3>
        <thead>
            <tr>
                <th>ID</th>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Subject Section</th>
                <th>Subject Unit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $db = mysqli_connect("localhost","root","","demo");
    		$result = mysqli_query($db,"SELECT*FROM subject");

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['subcode']."</td>
                        <td>".$row['subdec']."</td>
                        <td>".$row['subsection']."</td>
                        <td>".$row['subunit']."</td>
                        <td>
                             <a href='subup.php?id=".$row['id']."'><button type='submit' value='edit' >Edit</button></a>
                            <a href='sdel.php?id=".$row['id']."'><button type='submit' value='remove' id='remove' name='remove'>Remove</button></a>
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


<!DOCTYPE html>
<html>
<head>
<title>Lakeside Sound & Light</title>

<link rel="stylesheet" href="css/main.css">
</head>
<body>
      <ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
    <?php include 'header.php';?>
    <?php
$servername = "localhost";
$username = "sec_user";
$password = "greenChair153";
$dbname = "lakeside";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, title, para1, image1 FROM pages";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["image1"]. "<br>";
      $title=$row["title"];
      $image1=$row["image1"];
      $para1=$row["para1"];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
    <div class="section group">
	<div class="col span_3_of_3">
	<img src="images/mainimage.jpg"/>
	</div>
</div>
<div class="section group">
	<div class="col span_1_of_3">
	<img src="images/<?php print $image1;?>"/>
	</div>
	<div class="col span_2_of_3">
	<h2><?php print $title;?></h2>
    <p><?php print $para1;?></p>
	</div>
</div>
    <div class="section group">
	<div class="col span_1_of_3">
	<img src="images/image2.jpg"/>
	</div>
	<div class="col span_2_of_3">
	<h2>Lighting Hire</h2>
    <p>We aim to make your vision a reality with our lighting equipment. Lighting can make all the difference so make a wise decision by hiring our lighting equipment for your next concert, show or event.</p>
	</div>
</div>
<?php include 'footer.php';?>

    
</body>
</html>
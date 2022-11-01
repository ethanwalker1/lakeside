<!DOCTYPE html>
<html>
<head>
<title>Lakeside Sound & Light - Contact</title>

<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/form.css">
</head>
<body>
<?php include 'header.php';?>
    <div class="section group">
	<div class="col span_3_of_3">
	<img src="images/mainimage.jpg"/>
	</div>
</div>
<div class="section group">
	<div class="col span_1_of_3">
	<img src="images/image1.jpg"/>
	</div>
	<div class="col span_2_of_3">
	<form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name...">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name...">

    <label for="region">Region</label>
    <select id="region" name="country">
      <option value="farnorth">Far North</option>
      <option value="northland">Northland</option>
      <option value="other">Other</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write here..." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
	</div>
</div>
    <div class="section group">
	<div class="col span_1_of_3">
	<img src="images/image2.jpg"/>
	</div>
	<div class="col span_2_of_3">
	<h2>Thank you...</h2>
    <p>We appreciate you contacting us today. We will reply as soon as we can and ideally within 3days of contact. Qoutes can be provide upon request. Thank you from the team here at Lakeside Sound & Light</p>
	</div>
</div>
<?php include 'footer.php';?>
    
</body>
</html>
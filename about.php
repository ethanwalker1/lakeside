<!DOCTYPE html>
<html>
<head>
<title>Lakeside Sound & Light - About Us</title>
<link rel="stylesheet" href="css/main.css">
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

</head>
<body>
<?php include 'header.php';?>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Welcome to our "about us" page.</p>
  <p>This is where you can learn about us as a business and our individual team members</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/one_img.jpg" alt="Jeff" style="width:100%">
      <div class="container">
        <h2>Jeff Walker</h2>
        <p class="title">Team Leader</p>
        <p>Years of experience and knowledge. Leads the team to excute a great sounding system for you.</p>
        <p>lakeside@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/ethan_img.jpg" alt="Ethan" style="width:100%">
      <div class="container">
        <h2>Ethan Walker</h2>
        <p class="title">Head of Marketing</p>
        <p>Ethan comes with a drive to expand the business and getting our name out there including how great we are.</p>
        <p>ethan@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/one_img.jpg" alt="Cameron" style="width:100%">
      <div class="container">
        <h2>Cameron Walker</h2>
        <p class="title">PIC of Technology</p>
        <p>He is the expert of technology to ensure it all goes smoothly at the event.</p>
        <p>cameron@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
  <?php include 'footer.php';?>
</body>
</html>
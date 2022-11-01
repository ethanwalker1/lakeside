<!DOCTYPE html>
<html>
<head>
<title>Lakeside Sound & Light: Hire Page</title>

<link rel="stylesheet" href="css/main.css">
<style>
div.gallery {
  border: 0px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
    border: 2px solid rgba(0, 0, 0, 0.12);
    border-radius: 4px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<?php include 'header.php';?>
    <div class="section group">
	<div class="col span_3_of_3">
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/projector.jpg">
      <img src="images/projector.jpg" alt="Data Projector" width="600" height="400">
    </a>
    <div class="desc">Projector Hire. Hirage rate: $80.00/day</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/image6.jpg">
      <img src="images/image6.jpg" alt="Sound & Lighting" width="600" height="400">
    </a>
    <div class="desc">Sound and lighting equipment hire for events/concerts.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/image2.jpg">
      <img src="images/image2.jpg" alt="Lighting" width="600" height="400">
    </a>
    <div class="desc">Hire our lighting to add a nice touch to your event.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/mainimage.jpg">
      <img src="images/mainimage.jpg" alt="Main Image" width="600" height="400">
    </a>
    <div class="desc">Contact us today to discuss how we can help at your event.</div>
  </div>
</div>

<div class="clearfix"></div>
	</div>
</div>
<?php include 'footer.php';?>

</body>
</html>



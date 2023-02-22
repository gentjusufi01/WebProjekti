<!DOCTYPE html>
<html>
  <title>Produckt</title>
  <link rel="stylesheet" href="style.css">
  
<body onload="filterSelection('all')">
  
  
  <nav class="navbar">
    <a href="index.php"><img src="./foto/Logo.png"  class="logob"></a>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="Product.php">PRODUKTET</a></li>
        <li><a href="AboutUs.php">ABOUT US</a></li>
        <li><a href="News.php">NEWS</a></li>
        <li><a href="Register.php">LOG IN/SIGN UP</a></li>

    </ul>
    </nav>

<h1 style="color: green;text-align: center;">Produktet</h1>
<div id="myBtnContainer">
  <script src="javascript.js"></script>
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('korset')"> Korset</button>
  <button class="btn" onclick="filterSelection('kapele')"> Kapele</button>
  <button class="btn" onclick="filterSelection('qant')"> Qanta</button>
</div>

<div class="container">

<div>
    <?php include 'ProduktetInsertimi.php'; ?>
    </div>

  </div>

<section id="footer">
            
  <div class="foot">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="Product.php">PRODUKTET</a></li>
        <li><a href="AboutUs.php">ABOUT US</a></li>
        <li><a href="News.php">NEWS</a></li>
        <li><a href="Register.php">LOG IN/SIGN UP</a></li>

      </ul>
  </div>
  <div class="rfoot">
    <ul>
       <li>CONTACT US</li>
       <li>Spiffyline@gmail.com</li>
       <li>+383 48 374 893</li>
     </ul>

      <div class="social-links" style="margin-left: 47%;">
          <a href="https://www.tiktok.com/@spiffyline"><img src="./foto/tiktok.png"></a>
          <a href="https://www.instagram.com/spiffyline/"><img src="./foto/facebook.png" ></i></a>
          <a href="https://www.instagram.com/spiffyline/"><img src="./foto/instagram.png"></i></a>
        </div>
  </div>
</section>
</body>
</html>
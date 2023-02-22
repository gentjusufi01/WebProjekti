<!DOCTYPE html>
<html>
  <title>Produckt</title>
  <link rel="stylesheet" href="style.css">
  
<body onload="filterSelection('all')">
  
  
<?php include './header.php' ?>

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

  <?php include './footer.php'?>
</body>
</html>
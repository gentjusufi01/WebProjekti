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

  <div class="ac-center box">
  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Korset1.jpg" alt="" />
      </div>
      <p> Olive Green Strapless Korset</p>
      
      <div class="price">40€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant3.jpg" alt="" />
      </div>
      <p>Black Leather Handbag Pink Plush</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/PKorset.jpg" alt="" /> 
      </div>
      <p>Plain Pink Korset</p>
     
      <div class="price">30€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele1.jpg" alt="" />
      </div>
      <p>Leopard Print Plush Buckethat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant4.jpg" alt="" />
      </div>
      <p>Zebra Print Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/RKorset.jpg" alt="" />
      </div>
      <p>Red Mesh Korset</p>
     
      <div class="price">35€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/YKorset.jpg" alt="" />
      </div>
      <p>Sunflower Korset</p>
     
      <div class="price">35€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant5.jpg" alt="" />
      </div>
      <p>Hot Red Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/WKorset.jpg" alt="" />
      </div>
      <p>Simple White Bustier</p>
     
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele2.jpg" alt="" />
      </div>
      <p>Brownish Plush Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant6.jpg" alt="" />
      </div>
      <p>Green Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Korset2.jpg" alt="" />
      </div>
      <p>Light Green Mesh Korset</p>
     
      <div class="price">30€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/PKorset1.jpg" alt="" />
      </div>
      <p>Pink Plush Korset</p>
     
      <div class="price">38€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant7.jpg" alt="" />
      </div>
      <p>White Plush Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele3.jpg" alt="" />
      </div>
      <p>White Fluffy Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/RKorset1.jpg" alt="" />
      </div>
      <p>Red Korset With Sleeves</p>
     
      <div class="price">48€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant8.jpg" alt="" />
      </div>
      <p>Black Stripes Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/YKorset1.jpg" alt="" />
      </div>
      <p>Fluffy Sleeves Yellow Korset</p>
     
      <div class="price">37€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele4.jpg" alt="" />
      </div>
      <p>Red Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant9.jpg" alt="" />
      </div>
      <p>Cow Print Fluffy Handbag</p>
      
      <div class="price">15€</div>
    </div>
  </div>

  <div class="filterDiv korset">
 <div class="ac">
      <div class="img-cover">
        <img src="./foto/Korset3.jpg" alt="" />
      </div>
      <p>Olive Green Korset</p>
     
      <div class="price">35€</div>
    </div>
  </div>
  
  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/PKorset2.jpg" alt="" />
      </div>
      <p>Vibrant Pink Korset</p>
     
      <div class="price">25€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant10.jpg" alt="" />
      </div>
      <p>Special Violet Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele5.jpg" alt="" />
      </div>
      <p>Pink-ish Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/RKorset2.jpg" alt="" />
      </div>
      <p>Sparkly Red Korset</p>
     
      <div class="price">45€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant11.jpg" alt="" />
      </div>
      <p>Hot Green Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/YKorset2.jpg" alt="" />
      </div>
      <p>Yellow Korset with purple details</p>
     
      <div class="price">27€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele6.jpg" alt="" />
      </div>
      <p>white & Brown Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant12.jpg" alt="" />
      </div>
      <p>Black Plush Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/WKorset1.jpg" alt="" />
      </div>
      <p>Long Sleeved White Korset</p>
     
      <div class="price">39€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Korset4.jpg" alt="" />
      </div>
      <p>Complicated Green Korset</p>
     
      <div class="price">50€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div >
        <img class="img-cover" src="./foto/Kapele7.jpg" alt="" />
      </div>
      <p>Violet Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>


  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant13.jpg" alt="" />
      </div>
      <p>Purple Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/PKorset3.jpg" alt="" />
      </div>
      <p>Pink Strapless Korset</p>
     
      <div class="price">33€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/RKorset3.jpg" alt="" />
      </div>
      <p>Red Bustier</p>
     
      <div class="price">34€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant14.jpg" alt="" />
      </div>
      <p>Pink Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele8.jpg" alt="" />
      </div>
      <p>Brown Fluffy Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/YKorset3.jpg" alt="" />
      </div>
      <p>Yellow Bustier with purple details</p>
     
      <div class="price">35€</div>
    </div>
  </div>
  
  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Korset5.jpg" alt="" />
      </div>
      <p>Light Green Pearl Korset</p>
     
      <div class="price">55€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele9.jpg" alt="" />
      </div>
      <p>Pink Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant15.jpg" alt="" />
      </div>
      <p>Leopard Print Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/PKorset4.jpg" alt="" />
      </div>
      <p>Bow Pink Korset</p>
     
      <div class="price">42€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/RKorset4.jpg" alt="" />
      </div>
      <p>Red Plush Bustier</p>
     
      <div class="price">47€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele10.jpg" alt="" />
      </div>
      <p>Purple Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>
  
  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/YKorset4.jpg" alt="" />
      </div>
      <p>Vibrant Yellow Korset</p>
     
      <div class="price">33€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant16,jpg.jpeg" alt="" />
      </div>
      <p>Pearl Handbag</p>
      
      <div class="price">75€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Korset6.jpg" alt="" />
      </div>
      <p>Vibrant Green Korset</p>
     
      <div class="price">25€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele11.jpg" alt="" />
      </div>
      <p>Black Leather Buckehat</p>
      
      <div class="price">15€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/PKorset5.jpg" alt="" />
      </div>
      <p>Violet-ish Korset</p>
     
      <div class="price">35€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/RKorset5.jpg" alt="" />
      </div>
      <p>Red Fluffy Korset</p>
     
      <div class="price">35€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele12.jpg" alt="" />
      </div>
      <p>Zebra Print Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/YKorset5.jpg" alt="" />
      </div>
      <p>Plain Yellow Korset With Long Sleeves</p>
     
      <div class="price">35€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qantgjelbert.jpg" alt="" />
      </div>
      <p>Emerald Green Classy Handbag</p>
      
      <div class="price">20€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/WKorset2.jpg" alt="" />
      </div>
      <p>White Flowery Bustier</p>
     
      <div class="price">28€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele13.jpg" alt="" />
      </div>
      <p>Sky Blue Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>


  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Korset7.jpg" alt="" />
      </div>
      <p>Green Plush Korset</p>
     
      <div class="price">30€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/PKorset6.jpg" alt="" />
      </div>
      <p>Pink Flower Korset</p>
     
      <div class="price">23€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele14.jpg" alt="" />
      </div>
      <p>Light Brown Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/RKorset6.jpg" alt="" />
      </div>
      <p>Red Sparkly Bustier</p>
     
      <div class="price">47€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/YKorset6.jpg" alt="" />
      </div>
      <p>Yellow Pointy Korsets</p>
     
      <div class="price">25€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele15.jpg" alt="" />
      </div>
      <p>Brown Stripes Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Korset8.jpg" alt="" />
      </div>
      <p>Simple Green Korset</p>
     
      <div class="price">30€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/PKorset7.jpg" alt="" />
      </div>
      <p>Fading Pink Korset</p>
     
      <div class="price">25€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele16.jpg" alt="" />
      </div>
      <p>Love Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/RKorset7.jpg" alt="" />
      </div>
      <p>Simple Red Korset</p>
     
      <div class="price">30€</div>
    </div>
  </div>

  <div class="filterDiv korset">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/YKorset7.jpg" alt="" />
      </div>
      <p>Yellow Flower Bustier</p>
     
      <div class="price">27€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele17.jpg" alt="" />
      </div>
      <p>Red Plush Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv kapele">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/Kapele18.jpg" alt="" />
      </div>
      <p>White Buckehat</p>
      
      <div class="price">10€</div>
    </div>
  </div>

  <div class="filterDiv qant">
    <div class="ac">
      <div class="img-cover">
        <img src="./foto/qant2.jpg" alt="" />
      </div>
      <p>Black Leather Hat</p>
      
      <div class="price">20€</div>
    </div>
  </div>
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
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
	<title>Log In</title>
 
</head>

<body >
    <script src="javascript.js"></script>
    <nav class="navbar">
        <a href="index.php"><img src="./foto/Logo.png"  class="logob"></a>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="Product.php">PRODUKTET</a></li>
            <li><a href="AboutUs.php">ABOUT US</a></li>
            <li><a href="News.php">NEWS</a></li>
            <li><a href="Register.php">REGISTER</a></li>

    
        </ul>
        </nav>
        <div class="login">
            <div class="boxx">
                <div class="butonat">
                    <div id="btnn"></div>
                    <button type="button" class="butoni" onclick="login()">Log-in</button>
                    <button type="button" class="butoni" onclick="register()">Register</button>
                </div>
            <form id="Login" class="forma">
                <input type="text" class="input" placeholder="Emri i Perdoruesit" required>
                <input type="password" class="input" placeholder="Fjalkalimi" required>
                <button type="submit" class="submit-btn">Log in</button>
            </form>
            <form id="Regjistrohu" class="forma">
               
                <input type="text" class="input" placeholder="Emri" required>
                <input type="text" class="input" placeholder="Mbiemri" required>
                <input type="text" class="input" placeholder="Emri i Perdoruesit" required>
                <input type="password" class="input" placeholder="Fjalkalimi" required>
                <input type="text" class="input" id="Email" placeholder="Email" required>
                <input type="number" class="input" placeholder="Numri Kontaktues" required>
                <select class="Gjinia">
                    <option>Femer</option>
                    <option>Mashkull</option>
                </select>
                <button onclick="Validate()" type="submit" class="submit-btn">Regjistrohu</button>
            </form>
            </div>
        <script>
            var x = document.getElementById("Login");
            var y = document.getElementById("Regjistrohu");
            var z = document.getElementById("btnn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
                }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
                }
        </script>
        </div>
        <section id="footer">
            
            <div class="foot">
                <ul>
                  <li><a href="index.html">HOME</a></li>
                  <li><a href="Product.html">PRODUKTET</a></li>
                  <li><a href="AboutUs.html">ABOUT US</a></li>
        
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
        <script src="javascript.js"></script>

</body>

</html>

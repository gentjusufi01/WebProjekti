<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
	<title>Log In</title>
 
</head>

<body >


    <script src="javascript.js"></script>
    <?php include './header.php' ?>
        <div class="login">
            <div class="boxx">
                <div class="butonat">
                    <div id="btnn"></div>
                    <button type="button" class="butoni" onclick="login()">Log-in</button>
                    <button type="button" class="butoni" onclick="register()">Register</button>
                </div>
            <form id="Login" class="forma" action="checklogin.php" method="post">
                <input type="text"  name="Username" class="input" placeholder="Emri i Perdoruesit" required>
                <input type="password"  name="Passwordi" id="Pasi" class="input" placeholder="Fjalkalimi" required>
                <button type="submit" class="submit-btn">Log in</button>
            </form>
            <form id="Regjistrohu" class="forma" method="POST" action="insertimi.php">
                <input type="text" name="emri" class="input" placeholder="Emri" required>
                <input type="text" name="mbiemri" class="input" placeholder="Mbiemri" required>
                <input type="text" name="username" class="input" placeholder="Emri i Perdoruesit" required>
                <input type="password" name="password" id="Pas" class="input" placeholder="Fjalkalimi" required>
                <input type="text" name="email" class="input" id="Email" placeholder="Email" required>
                <input type="number" name="numri_kontaktues" id="Nr" class="input" placeholder="Numri Kontaktues" required>
                <select name="gjinia" class="Gjinia">
                    <option value="f">Femer</option>
                     <option value="m">Mashkull</option>
                </select>
                <button onclick="ValidateReg()" type="submit" class="submit-btn">Regjistrohu</button>
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
            <?php include './footer.php'?>
        <script src="javascript.js"></script>

</body>

</html>

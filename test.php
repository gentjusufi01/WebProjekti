<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <script>
function Validate() {
  var mail = document.getElementById("E").value;
  var regex = /^([a-zA-Z0-9._]+)@([a-zA-Z0-9-])+([a-zA-Z0-9-]+)*$/;
  
  if (regex.test(mail)) {
    alert("Email adresa juaj eshte valide!");
    return true;
  } else {
    alert("Email adresa juaj nuk eshte valide, provoni perseri!");
    return false;
  }
}
    </script>

<form id="Regjistrohu" class="forma">
   
    <input type="text" class="input" placeholder="Emri">
    <input type="text" class="input" placeholder="Mbiemri">
    <input type="text" class="input" placeholder="Emri i Perdoruesit">
    <input type="password" class="input" placeholder="Fjalkalimi">
    <input type="text" class="input" id="E" placeholder="Email">
    <input type="number" class="input" placeholder="Numri Kontaktues">
    <select class="Gjinia">
        <option>Femer</option>
        <option>Mashkull</option>
    </select>
    <button onclick="Validate()" type="submit" class="submit-btn">Regjistrohu</button>
</form>
</body>
</html>
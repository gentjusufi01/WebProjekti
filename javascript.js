var i = 0;
var imgArray = [
"foto/korsetashum.jpg",
"foto/korsetakategori.jpg",
"foto/kapuqashum.jpg",
"foto/qantakategori.jpg"
];

function ndrroImg() {
    document.getElementById('slideshow').src = imgArray[i];
if (i < imgArray.length - 1 ) {
    i++;
}else {
    i=0;
}
setTimeout("ndrroImg()", 1500)
}
document.body.addEventListener('load', ndrroImg());

// filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

filterSelection('all');

function ValidateReg() {
  var mail = document.getElementById("Email").value;
  var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  
  if (regex.test(mail)) {
    alert("Email adresa juaj eshte valide!");
    return true;
  } else {
    alert("Email adresa juaj nuk eshte valide, provoni perseri!");
    return false;
  }
}
function ValidateReg(){
  var pasi = document.getElementById("Pas").value;
  var pregex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

  if(pregex.test(pasi)){
    alert("Fjalkalimi juaj eshte valid");
    return true;
  }
  else{
    alert ("Fjalkalimi juaj nuk i ploteson kerkesat");
    return false;
  }
}
function ValidateReg(){
  var nr = document.getElementById("Nr").value;
  var nregex = /^04\d{7}$/;

  if(nregex.test(nr)){
    alert("Numri Kontaktues eshte valid");
    return true;
  }
  else{
    alert("Numri Kontktues nuk eshte valid");
    return false;
  }
}
// function ValidateLog(){
//   var pasi = document.getElementById("Pasi").value;
//   var pregex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

//   if(pregex.test(pasi)){
//     alert("Fjalkalimi juaj eshte valid");
//     return true;
//   }
//   else{
//     alert ("Fjalkalimi juaj nuk i ploteson kerkesat");
//     return false;
//   }
// }
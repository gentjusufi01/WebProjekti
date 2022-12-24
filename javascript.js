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


function validate() {

  var user = document.getElementById("e").value;
  var user2 = document.getElementById("e");
  var password = document.getElementById("Pasi").value;
  var emri= document.getElementById("EmriRegister").value;

  
  var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(emri==null||emri.trim()==""){
    alert("!!Nuk jeni Regjistruar!!");
    return false;
  }else if (re.test(user) && password>6) {
    alert("Jeni Regjistruar me Sukses!");
    return true;
  }
  else {
    alert("!!Nuk jeni Regjistruar!!");
    return false;
  }
  
}

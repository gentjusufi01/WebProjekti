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
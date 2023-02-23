<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
	<style>
		.butoni{
			display: inline-block;
			border-radius: 80px;
			background-color: #ff4321;
			padding: 10px 20px;
			color: white;
			font-weight: 600;
			margin-left:15px;
			margin-bottom:15px;
			border:2px solid #FFB84C ;
		}
		table {
			border-collapse: collapse;
            margin: 0 auto;
		}
		table, th, td {
			border: 1px solid black;
		}
		th, td {
			padding: 10px;
		}
		th {
			background-color: #555;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		.hidden {
			display: none;
		}

	</style>
	<script>
		function showTag(tagId) {
  var tags = document.querySelectorAll("div[id^='tag']");
  for (var i = 0; i < tags.length; i++) {
    if (tags[i].id == tagId) {
      tags[i].classList.remove("hidden");
    } else {
      tags[i].classList.add("hidden");
    }
  }
}

</script>
</head>
<body>


<?php include './header.php' ?>
    <br>
	<button class="butoni" onclick="showTag('tag1')">User List</button>
<button class="butoni" onclick="showTag('tag2')">News List</button>
<button class="butoni" onclick="showTag('tag3')">Product list</button>

<div id="tag1" class="hidden">
	<h1 style="text-align: center;">Spiffyline User List</h1> 
    <br>
	<?php include './klientatdashboard.php'; ?>
</div>

<div id="tag2" class="hidden">
<h1 style="text-align: center;">Spiffyline News List</h1> 
    <br>
	<?php include './NEWSDASHBOARD.php'; ?>	
</div>
<div id="tag3" class="hidden">
<h1 style="text-align: center;">Spiffyline Product List</h1> 
    <br>
	<?php include './ProduktetDashboard.php'; ?>
</div>
</div>

	
	


	
    <br>
    <?php include './footer.php'?>


</body>
</html>

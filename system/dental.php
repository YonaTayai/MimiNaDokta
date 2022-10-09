<!DOCTYPE html>
<html>
<head>
	<title>Dental Treatment</title>
	<link rel="stylesheet" type="text/css" href="../designing/h_styling.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body style="background-image: url('../images/hosptbg.jpg');">
	<?php include ('headre1.php'); ?>
	
	<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:200px;">
    <div class="profileleft w3-section ">
      <img class="w3-circle profile" src="../images/profile.webp">
      <h6>Admin's Profile</h6>
      <p>admin@gmail.com</p>
    </div>
    <hr>
  		<a href="#" id="d1" class="font w3-bar-item w3-button">Dentist</a>
    	<a href="#" id="d2" class="font w3-bar-item w3-button">Bones</a>
    	<a href="#" id="d3" class="font w3-bar-item w3-button">Skin</a>
			</div>
		</div>
		<div class=" px200">
      <div class="container w3-card registform">
    <h3 class="w3-center">DOCTORS REGISTRATION FORM</h3>   
    <hr>
    <form action="adminActform.php" method="POST" onsubmit="formValidation();"  >
      <div class="w3-row w3-row-padding">
        <div class="w3-third">
          <label class="font">Email:</label>
          <input class="w3-input w3-hover-border-green" type="email" required name="email">
        </div>
        <div class="w3-third l4">
          <label class="font">Password:</label>
          <input class="w3-input w3-hover-border-green" type="password" required name="password">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-third w3-left-bar l4">
          <label class="font">Name:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="name">
        </div>
        <div class="w3-third w3-left-bar l4">
          <label class="font">Profile Picture:</label>
          <input class="w3-input w3-hover-border-green" type="file" required name="ppicture">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-third">
          <label class="font">Phone Number:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="phone">
        </div>
        <div class="w3-third l4">
          <label class="font">Physical Address:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="paddress">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-third w3-left-bar l4">
          <label class="font">Date of Birth:</label>
          <input class="w3-input w3-hover-border-green" type="date" required name="dob">
        </div>
        <div class="w3-third w3-left-bar l4">
          <label class="font">Education Level:</label>
          <input class="w3-input w3-hover-border-green" type="text" required name="education">
        </div>        
      </div>
      <div class="w3-row w3-row-padding">
        <div class="w3-third w3-left-bar l4">
          <label class="font">Expertise:</label>
          <select name="expert">
            <option value="bones">Bones</option>
            <option value="skin">Skin</option>
            <option value="muscles">Muscles</option>
            <option value="eyes">Eyes</option>
          </select>
        </div>
        <div class="w3-third w3-left-bar l4">
          <label class="font">Status:</label>
          <select name="status">
            <option value="Active">Active</option>
            <option value="Active">InActive</option>
          </select>
        </div>        
      </div>
      <div class="w3-row mt-4 w3-row-padding">
        <div class="w3-third w3-left-bar l4">
          <label class="font">Date Of Admission:</label>
          <input class="w3-input w3-hover-border-green" type="date" required name="admDate">
        </div>
          <button type="submit" name="submit" class="w3-section w3-button w3-group w3-third w3-padding w3-dark-grey w3-border-0 w3-hover-teal">Register
          </button>
        </div>            
      
    </form>
    </div>
		</div>
		<!-- <img class="w3-center" src="../images/avatar3.png">
		<img class="mr-5"src="../images/avatar3.png"> -->

	
		<div id="logoutform" class="">
			<li>LogOut</li>
		</div>
		
	</div>

	<script type="text/javascript">
		<script>
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myDropFunc() {
  var x = document.getElementById("demoDrop");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
</script>
		
	</script>
</body>
</html>
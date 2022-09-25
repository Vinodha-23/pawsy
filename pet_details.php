
<!DOCTYPE html>
<head>
     <title>GROOMING</title>
</head>
<body>
     <h1 style="text-align:center;background-color: #F38BA0;color:black;">We would love to know more about you !</h1>
     
     <br>
    
     <form action="details.php" method="post" style="margin:2cm;">
          <h2 style="text-align:center;background-color: #F38BA0;color:black;">ENTER PET DETAILS</h2>

          <h3>Please select your pet type:</h3>
<select name="type" id="type">
  <option value="cat">Cat</option>
  <option value="dog">Dog</option>s
</select>
          <h3>Enter your pet breed:</h3>
          <input type="text" name="breed">
          <h3>Enter gender of your pet:</h3>
          <input type="text" name="gender" >
          <h3>Enter Your Pet's name:</h3>
          <input type="text" name="name" autocomplete="off">
          <h3>Enter any additional information for groomer:</h3>
          <input type="text" name="info">
          <h3 style="text-align: center;background-color: #F38BA0;color:black;">PACKAGES AVAILABLE FOR DOG</h3><br>
          <img src="dogs.png" style="width:1300px">
          <h3 style="text-align: center;background-color: #F38BA0;color:black;">PACKAGES AVAILABLE FOR CAT</h3><br>
          <img src="cats.png">
          <h3 >SELECT PACKAGE</h3>
          <h3>FOR DOGS:</h3>
          <input type="radio" id="package1" name="package1" value="800">
          <label for="html">Spa Bath</label>
          <input type="radio" id="package2" name="package1" value="1299">
          <label for="css">BATH+Basic Grooming</label>
          <input type="radio" id="package3" name="package1" value="1499">
          <label for="javascript">Full Service</label>

          <h3>FOR CATS:</h3>
          <input type="radio" id="package1" name="package1" value="800">
          <label for="html">Bath + Basic Grooming</label>
          <input type="radio" id="package2" name="package1" value="1299">
          <label for="css">Full Service</label><br>
          <h3>Enter Appointment Date:</h3>
          <input type="text" name="date" placeholder="dd-mm-yyyy">
          <h3>Enter Appoitment Time:</h3>
          <input type="text" name="time" placeholder="hh-mm-ss">
          <h3>Where do you want the grooming to be done?</h3>
          <input type="radio" id="dest" name="dest" value="At Home">
          <label for="At Home">At Home</label>
          <input type="radio" id="dest" name="dest" value="At Our Place">
          <label for="At Our Place">At Our Place</label>

    
          <br>
          <br>
          <hr><br>
          <h2 style="text-align:center;background-color: #F38BA0;color:black;">ENTER YOUR DETAILS</h2>
          <h3>Enter your Username:</h3>
          <input type="text" name="n" autocomplete="off"><br>
          <h3>Enter your registered email:</h3>
          <input type="text" name="email" autocomplete="off">
          <h3>Enter your number:</h3>
          <input type="text" name="num" autocomplete="off">
          <h3>Enter your address:</h3>
          <input type="text" name="address">
          <h3>Enter your state:</h3>
          <input type="text" name="state">
          <br>
          <br>
          <button type="submit" style="background-color: #F38BA0;color:black;margin-left:14cm;margin-top:1cm;font-size: large;padding:15px;">CONFIRM APPOINTMENT</button>
          
     </form>
</body>
<?php
     header("details.php");
?>
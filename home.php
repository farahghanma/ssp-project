<html>
  
<?php
  require_once 'connection.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

  if (isset($_POST['fname'])   &&
      isset($_POST['lname'])    &&
      isset($_POST['email']) &&
      isset($_POST['trip_option'])     &&
      isset($_POST['message'])){
        $fname   = get_post($conn, 'fname');
        $lname    = get_post($conn, 'lname');
        $email = get_post($conn, 'email');
        $trip_option     = get_post($conn, 'trip_option');
        $message     = get_post($conn, 'message');
        $query    = "INSERT INTO subscribers VALUES" . "('$fname', '$lname', '$email', '$trip_option', '$message')";
        $result   = $conn->query($query);
    
      	if (!$result) echo "INSERT failed: $query<br>" .
          $conn->error . "<br><br>";
    }
    
    if (isset($_POST['unsubscribe_email'])){
        $email   = get_post($conn, 'unsubscribe_email');
        $query  = "DELETE FROM subscribers WHERE email='$email'";
        $result = $conn->query($query);
      	if (!$result) {
      	    echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
        }
    }
    
  $conn->close();
  
  function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
  
  echo <<<_END
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Including Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Including CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Including jQuery -->
    <!-- Using jQuery for the header & burger menu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Including JS -->
    <script src="main.js"></script>

    <link rel="icon" href="images/travel-guide.png">
    <title>Welcome to Jordan!</title>
</head>

<body>
    <!-- Header --> 
    <header class="header">
        <a href="home.php" class="logo">
            <img src="images/travel-guide.png" alt="logo">
        </a>
        
        <div class="fas fa-bars"></div>
        
        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#sites">Sites</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>  

    <!-- Home -->
    <section id="home" class="home">
        <h1 class="title">Welcome to Jordan!</h1>
        <h3 class="slogan">Giving you a glimpse into the heart of the Middle East</h3>
        <button><a href="#contact">Become a Nomad</a></button>
    </section>

    <!-- About Us -->
    <section id="about" class="about">
        <h1 class="heading">About Us</h1>
        <div class="row">
            <div class="content">
                <h2>We Bring Jordan to YOU!</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                    but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
            </div>

            <div class="image">
                <img src="images/jordan2.jpg" alt="jordan">
            </div>
        </div>
    </section>
    
    <!-- Sites -->
    <section id="sites" class="sites">
        <h1 class="heading">Sites</h1>
        
        <div class="row">
            <div class="image">
                <img src="images/petra.jpg" alt="Petra">
            </div>

            <div class="content">
                <h2>Petra</h2>
                <p>Petra is a famous archaeological site in Jordan's southwestern desert. Dating to around 300 B.C., it was the capital of the Nabatean Kingdom. Accessed via a narrow canyon called Al Siq, it contains tombs and temples carved into pink sandstone cliffs, earning its nickname, the "Rose City." Perhaps its most famous structure is 45m-high Al Khazneh, a temple with an ornate, Greek-style facade, and known as The Treasury.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="content">
                <h2>Wadi Rum</h2>
                <p>Wadi Rum Desert is famed for its link to T.E. Lawrence the original “Lawrence of Arabia”. Along with Prince Feisal bin Al-Hussein, he made his base here during the Arab Revolt of 1917-1918. At the center of Wadi Rum village is the Desert Police fort.
                </p>
            </div>

            <div class="image">
                <img src="images/WadiRum2.jpg" alt="Wadi Rum">
            </div>
        </div>
        
        <div class="row">
            <div class="image">
                <img src="images/Ajloun.jpg" alt="Ajloun">
            </div>

            <div class="content">
                <h2>Ajloun</h2>
                <p>Petra is a famous archaeological site in Jordan's southwestern desert. Dating to around 300 B.C., it was the capital of the Nabatean Kingdom. Accessed via a narrow canyon called Al Siq, it contains tombs and temples carved into pink sandstone cliffs, earning its nickname, the "Rose City." Perhaps its most famous structure is 45m-high Al Khazneh, a temple with an ornate, Greek-style facade, and known as The Treasury.
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="content">
                <h2>The Dead Sea</h2>
                <p>A spectacular natural wonder the Dead Sea that is located 427 meters below sea level is perfect for wellness and religious tourism, fun in the sun with the family. With its mix of beach living and religious history you can soak up the sun while Biblical scholars can get their daily dose of religious history. The leading attraction at the Dead Sea is the warm, soothing, super salty water itself – some ten times saltier than sea water, and rich in chloride salts of magnesium, sodium, potassium, bromine and several others. 
                </p>
            </div>

            <div class="image">
                <img src="images/Dead Sea.jpg" alt="Dead Sea">
            </div>
        </div>

        <div class="row">
            <div class="image">
                <img src="images/Mujib.jpg" alt="Wadi Al-Mujib">
            </div>

            <div class="content">
                <h2>Wadi Al-Mujeb</h2>
                <p>Aqaba is a Jordanian port city on the Red Sea's Gulf of Aqaba. Inhabited since 4000 B.C., it's home to the Islamic-era Aqaba Fort. Its beach resorts are popular for windsurfing and other water sports, and the area is a top destination for scuba divers, with notable dive sites including the Yamanieh coral reef in the Aqaba Marine Park, south of the city.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="content">
                <h2>Aqaba</h2>
                <p>A spectacular natural wonder the Dead Sea that is located 427 meters below sea level is perfect for wellness and religious tourism, fun in the sun with the family. With its mix of beach living and religious history you can soak up the sun while Biblical scholars can get their daily dose of religious history. The leading attraction at the Dead Sea is the warm, soothing, super salty water itself – some ten times saltier than sea water, and rich in chloride salts of magnesium, sodium, potassium, bromine and several others. 
                </p>
            </div>

            <div class="image">
                <img src="images/Aqaba.jpg" alt="Aqaba">
            </div>
        </div>
    </section>
    
    <!-- Form -->
    <section id="contact" class="contact">
        <h1 class="heading">Let's Get to Know You!</h1>
        <div class="row">
            <div class="image">
                <img src="images/tourism.png" alt="tourism" id="contactImg">
            </div>

            <div class="form-container" id="mainFormDiv">
            
                <style>
                    .hide { position:absolute; top:-1px; left:-1px; width:1px; height:1px; }
                </style>
                
                <iframe name="frame" class="hide"></iframe>

                <form action="home.php" method="post" id="contactForm" target="frame">
                    <div class="inputBox">
                        <input type="text" name="fname" placeholder="First Name">
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>

                    <input type="email" name="email" placeholder="Email">
                    <select name="trip_option">
            			<option class="disabled" value="" disabled selected>Select Your Trip Option!</option>
              			<option value="water">One with Water - Wadi Al Mujeb</option>
              			<option value="nature">One With Nature - Ajloun</option>
              			<option value="sea">Swim the Sea - Aqaba</option>
              			<option value="night">The Night Sky - Wadi Rum</option>
            			<option value="dead-sea">Salt in my Hair - Dead Sea</option>
            			<option value="petra">Rose City - Petra</option>
        		    </select>
                    <textarea cols="30" rows="10" name="message" placeholder="Message"></textarea>
                    <button type="submit" class="btn">Send</button>
                </form>
            </div>

            <div id="submitMessage" style="display:none">
                <h1 style="font-size: 3.5rem;">Thank you for submitting!<h1>
                <p id="unsubscribe_link">Unsubscribe?</p>
            </div>
            
            <div id="unsubscribe" style="display:none">
                <iframe name="frame2" class="hide"></iframe>

                <form action="home.php" method="post" id="unsubscribeForm" target="frame2">
                    <input type="email" name="unsubscribe_email" placeholder="Enter Email">
                    <button type="submit" class="btn">Unsubscribe</button>
                </form>
            </div>
            
            <div id="confirm-unsubscribe" style="display:none">
                <h1 style="font-size: 3.5rem;">It's so sad to see you go!<h1>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <section class="footer">
        <h1>Created By Farah & Saba | All Rights Reserved </h1>
    </section>
</body>

_END;
?>

</html>

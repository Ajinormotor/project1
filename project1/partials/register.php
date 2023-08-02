<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet"  href="register.css">
</head>
<body>

    <div class="circle">
        <div class="hero">
            <h1>Welcome to AjinoTech</h1>
            <p>Dont Have an account, please sign up using the registration form</p>
            <p>Already a Member <a href="#">Login Here?</a></p>
        <img src="download (1).png"  width="200px">
    
        </div>
    </div>

    <div class="banner">
        <div class="container">
        <h1>Register Form!</h1>
        <form action="../actions/registration.php"  method="POST">
            <div class="input">
                <input type="text" name="username" placeholder="username" require ="required"  class="inputs">
            </div>
            <div class="input">
                <input type="email" name="email" placeholder="email" require ="required" class="inputs">
            </div>
            
            <div class="input">
                <input type="password" name="password" placeholder="Password" require ="required" class="inputs">
            </div>

            <div class="input">
                <input type="password" name="cpassword" placeholder="Confirm Password" require ="required" class="inputs">
            </div>
            
      <div class="submit">
        <input type="submit" value="login"  class="submits">
        
      </div>
      <div class="socials">
        <ul>
      <li> <img src="facebook-icon.png"  width="50px"><br></li>
      <li> <img src="twitter-icon.png"  width="50px"><br></li>
      <li><img src="instagram-icon.png"  width="50px"><br></li>
        <li><img src="linkedin-icon.png"  width="50px"><br></li>
        
        </ul>
      </div>

            
            </div>
            
        </form>
    </div>

    
</body>
</html>
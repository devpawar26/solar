<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    background: #e4e9f7;
}
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
}
.box{
    background: #fdfdfd;
    display: flex;
    flex-direction: column;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5);
}
.form-box{
    width: 450px;
    margin: 0px 10px;
}
.form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
}
.form-box form .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;

}
.form-box form .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}
.btn{
    height: 35px;
    background: rgba(76,68,182,0.808);
    border: 0;
    border-radius: 5px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: all .3s;
    margin-top: 10px;
    padding: 0px 10px;
}
.btn:hover{
    opacity: 0.82;
}
.submit{
    width: 100%;
}
.links{
    margin-bottom: 15px;
}
</style>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];


         $verify_query = mysqli_query($con,"SELECT Email FROM users1 WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users1(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='home.php'><button class='btn'>Login Now</button>";
         
         }

         }else{
         
        ?>
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="home.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>

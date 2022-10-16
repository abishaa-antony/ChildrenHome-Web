<html>
      <head>
       <title>Login Form</title>
       <link rel = "stylesheet" href="newlogin.css">
      
       </head>
        <div class= "heading">
        <h1><b>Samadhi Children Home</b></h1> 
        
        </div>
            
        <div class ="logo" >
        <img src="image/monophy.gif" alt="logo">   
        </div>   
        <body>
               
         <section class = "sectionone">
        <h3>"Happiness is seeing the Kids Happy."</h3>
         </section>     
            
        
          
         <div class = "content">
         <h2>User Login</h2>
         <div>
      <?php
require_once('database.php');

if(isset($_POST['create'])){

    $uname = mysqli_real_escape_string($conn,$_POST['name']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as count_user from login where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['count_user'];

        if($count > 0){
            echo 'login success';
            header('Location: dashboard.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
          
          ?>
          
          
      </div>
     
      <form action="login.php" method = "post">
         <div class = "container">
         <div class= "login">
         <label for="name"><b>User Name</b></label>
         <input type="text" id="name" name="name" placeholder= "Enter User Name">
         </div>
          
          <div class= "login">
          <label for="password"><b>Password</b></label>
          <input type="password" id="password" name="password" placeholder= "Enter Password">
          </div>
         
          <div class= "login">
        <input type="submit" id= "submit_btn" name = "create" value = "Insert" onclick = " return allLetter()">
         
          </div>
          
          <div class= "login">
          <input type="checkbox" id="AcceptenceChecking" name="acceptence" value="confirm">
          <label id = "remember">Remember Me</label>
          </div>
          
          <div class="login" >
         <input type="button" class="cancelbtn"  value="Cancel">
         <span class="psw">Forgot <a href="#">password?</a></span>
         </div>
        </div>
     </form>
               
        </div>
     </body>
       
     
</html>
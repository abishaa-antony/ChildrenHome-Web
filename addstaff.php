<html>
    <head>
    <title>Add Staff Form</title>
          <link rel = "stylesheet" href="formstyle.css">
         <script type="text/javascript" src="staff_validation.js"></script>
       
    </head>
    
    <body>
        <h2>ADD STAFF</h2>
        
     <div>
        
    <?php
require_once('database.php');
        
 if(isset($_POST['create'])) {
          $firstname = $_POST['fname'];
          $lastname = $_POST['lname'];
          $name = $_POST['name'];
          $bdate = $_POST['bdate'];
          $nic = $_POST['nic'];
          $gender= $_POST['gender'];
          $number = $_POST['number'];
          $address = $_POST['address'];
          $email = $_POST['email'];
          $selection = $_POST['selection'];
          $image= $_POST['empImage'];
          
          $sql = "INSERT INTO staff (fname, lname, initial, dob, nic, gender, contact, address, email,post, image) VALUES( '$firstname','$lastname','$name','$bdate','$nic','$gender','$number','$address','$email','$selection','$image')";
         
           if ($conn->query($sql) === TRUE) {
            echo 'New record created successfully';
           } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
           }  
      }
mysqli_close($conn);
    
     
    ?>
    </div>
    
    <form action = "addstaff.php" method= "post">
    <div class = "container">
    
         
        
          <div class= "staff">
         <label for="fname"><b>First Name</b></label>
         <input type="text" id="fname" name="fname" placeholder= "Enter First Name" required>
          <span id="error_fname"></span>
         </div>
         
        <div class= "staff">
         <label for="lname"><b>Last Name</b></label>
         <input type="text" id="lname" name="lname" placeholder= "Enter Last Name" required>
         <span id="error_lname"></span>
         </div>
        
        <div class= "staff">
         <label for="name"><b>Name with Initials</b></label>
         <input type="text" id="name" name="name" placeholder= "Enter Name with initials" required>
        <span id="error_initial"></span>
         </div>
         
         <div class= "staff">
         <label for="date"><b>Birth Date</b></label>
         <input type="date" id="bdate" name="bdate">
         </div>
         
         <div class= "staff">
         <label for="nic"><b>NIC Number</b></label>
         <input type="text" id="nic" name="nic" placeholder= "Enter NIC Number" required>
         </div>
        
         <div class= "staff">
         <label for="gender">Gender</label>
         <label><input type="radio" name="gender" value = "Male" id = "m_gender">Male<input type="radio" name="gender" value = "Female" id = "f_gender">Female</label>
         <span id="error_gender"></span>
        </div>
          
         <div class= "staff">
         <label for="number"><b>Contact Number</b></label>
         <input type="text" id="number" name="number" placeholder= "Enter Contact Number"required>
         </div>
        
        <div class= "staff">
         <label for="address"><b>Permanent Adddress</b></label>
         <input type="text" id="address" name="address" placeholder= "Enter Address"required>
         </div>
          
         <div class= "staff">
         <label for="email"><b>Email Address</b></label>
         <input type="text" id="email" name="email" placeholder= "Enter Email address"required>
         </div>
        
          <div class= "staff">
          <label for="selection"><b>Post</b></label>
          <select name = "selection">
          <option value="Select">Select one</option>
          <option value="Admin">Admin</option>
          <option value="Principal">Principal</option>
          <option value="Matron">Matron</option>
          </select>
          </div>
         <div class= "staff">
         <label for="image"><b>Profile</b></label>
    
         <input type="file" name="empImage" placeholder="Drag the image here" class="fileBtnStyle" >
                       
         </div>
        
         <div class= "staff">
          
          <input type="submit" id= "submit_btn" name = "create" value = "Insert" >
          </div>
           
    </div>    
        
    </form>
    
    </body>
</html>
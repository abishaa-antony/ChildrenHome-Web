<html>
    <head><title>Add Labor Form</title>
     <link rel = "stylesheet" href="formstyle.css">
     <script type="text/javascript" src="laborvalidation.js"></script>
     
    </head>
    
    <body>
    <h2>ADD LABOR</h2>
        
      <div>
        
    <?php
require_once('database.php');
        
 if(isset($_POST['create'])) {
         $fullname = $_POST['name'];
         $firstname = $_POST['fname'];
         $bdate = $_POST['bdate'];
         $gender= $_POST['gender'];
         $number = $_POST['number'];
         $address = $_POST['address'];
         $selection = $_POST['selection'];
         $salary = $_POST['amount'];
          
          $sql = "INSERT INTO labor (fullname, fname, bdate, gender, contact, address, company,salary) VALUES( '$fullname','$firstname','$bdate','$gender','$number','$address','$selection','$selection','$salary')";
         
           if ($conn->query($sql) === TRUE) {
            echo 'New record created successfully';
           } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
           }  
      }
mysqli_close($conn);
    
     
    ?>
    </div>
        
    <form action = "addlabor.php" method="post">
    <div class = "container">
    
         <div class= "labor">
         <label for="name"><b>Name with Initals</b></label>
         <input type="text" id="name" name="name" placeholder= "Name with initials" required>
         <span id="error_name"></span>
         </div>
         
         <div class= "labor">
         <label for="fname"><b>Full Name</b></label>
         <input type="text" id="fname" name="fname" placeholder= "Enter Full Name" required>
          <span id="error_fname"></span>
         </div>
         
         <div class= "labor">
         <label for="date"><b>Birthdate</b></label>
         <input type="date" id="bdate" name="bdate" required>
          <span id="error_date"></span>
         </div>
         
         <div class= "labor">
          <label for="gender"><b>Gender</b></label>
          <label><input type="radio"  name="gender" value = "Male" id= "male"><b>Male</b><input type="radio" name="gender" value = "Female" id= "female"><b>Female</b></label>
          <span id="error_gender"></span>
        </div>
         
         <div class= "labor">
         <label for="number"><b>Contact Number</b></label>
         <input type="text" id="number" name="number" placeholder= "Enter Contact Number" required>
          <span id="error_number"></span>
         </div>
          
         <div class= "labor">
         <label for="address"><b>Permanent Address </b></label>
         <input type="text" id="address" name="address" required>
          <span id="error_naddress"></span>
         </div>
          
         <div class = "labor">
         <label for="selection"><b>Hiring Company </b></label>
         <select name = "selection" required >
         
         <option value="Select">Select one</option>
         <option value="Sunshine">Sunshine</option>
         <option value="Moonlight">Moonlight</option>
         </select>
          <span id="error_selection"></span>
         </div>
        
         <div class= "labor">
         <label for="amount"><b>Salary</b></label>
         <input type="number" min="1" step="any" id="amount" name="amount" placeholder= "Enter Amount" required>
         <span id="error_file"></span>
         </div>
         
         <div class= "labor">
         <input type="submit" name = "create" value = "Insert" id = "submit_btn" >
         </div>
          
    </div>    
        
    </form>
    
    </body>
</html>
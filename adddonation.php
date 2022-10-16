<html>
    <head>
        
        <title>Add Donations Form</title>
     <link rel = "stylesheet" href="formstyle.css">
     <script type="text/javascript" src="Validation.js"></script>
        
   
    </head>
   
    <body>
         <h2>ADD DONATIONS</h2>
    <div>
       <?php
           $error_name ="";
    require_once('database.php');
        
    if(isset($_POST['create'])) {
        
          $name = $_POST['name'];
          $address = $_POST['address'];
          $number = $_POST['number'];
          $type= $_POST['type'];
          $amount = $_POST['amount'];
          $date = $_POST['bdate'];
        
          if(empty($_POST["name"])){
				$error_name = "* Name is required";
			}else{
				$name = input($_POST["name"]);
				if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
					$error_name = " * Only Letters and whitespaces allowed";
				}
			}
          
          $sql = "INSERT INTO donation (name, address, number, type, amount,date) VALUES( '$name','$address','$number','$type','$amount','$date')";
         
           if ($conn->query($sql) === TRUE) {
            echo 'New record created successfully';
           } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
           }  
      }
     mysqli_close($conn);
      	function input($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}	
        ?>
        
    </div>
    <form action = "adddonation.php" method= "post">
    <div class = "container">
    
         <div class= "donation">
         <label for="name"><b>Full Name</b></label>
         <input type="text" id="name" name="name" placeholder= "Enter Full Name " required>
          <span class="error"><?php echo $error_name;?></span>
         
         </div>
         
         <div class= "donation">
         <label for="fname"><b>Address</b></label>
         <input type="text" id="address" name="address" placeholder= "Enter Address"  required>
         
         </div>       
         
         <div class= "donation">       
         <label for="number"><b>Contact Number</b></label>
         <input type="text" id="number" name="number" placeholder= "Enter Contact Number"required>          
         </div>
         
          <div class= "donation">
          <label for="type"><b>Amount Type</b></label>
          <label><input type="radio"  name="type" id= "cash" value = "Cash"><b>Cash</b><input type="radio" name="type" id= "card" value = "Card"><b>Item</b><input type="radio"  name="type" id= "both" value = "Both"required><b>Both</b></label >
          
          </div>
          
         <div class= "donation">
         <label for="amount"><b>Donation amount</b></label>
         <input type="number" min="1" step="any" id="amount" name="amount" placeholder= "Enter Amount" required>
        
         </div>
        
         <div class= "donation">
         <label for="date"><b>Donated On</b></label>
         <input type="date" id="bdate" name="bdate" required>
         
         </div>
        
         <div class= "donation">
         <input type="submit" name = "create" value = "Insert" id = "submit_btn" >
         </div>
           
    </div>    
        
    </form>
    
    </body>
</html>
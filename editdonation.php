<?php
$id = "";
require_once('database.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == null){
    echo 'id is null';
}
$sql = mysqli_query($conn,"SELECT id, name, address, number, type, amount from donation where id='$id'");

$data = mysqli_fetch_array($sql); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
          $name = $_POST['name'];
          $address = $_POST['address'];
          $number = $_POST['number'];
          $type= $_POST['type'];
          $amount = $_POST['amount'];
	      $idx = $_POST['id'];
    $edit = mysqli_query($conn,"UPDATE donation set name='$name', address='$address', number='$number', type='$type', amount='$amount' where id='$idx'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
         echo 'New record updated successfully';
          header("location:viewdonation.php");
    }
    else
    {
        echo mysqli_error();
         header("location:viewdonation.php");
    }   
}
?>
<html>
    <head>
        
        <title>Edit Donations Form</title>
      <link rel = "stylesheet" href="formstyle.css">
     <script type="text/javascript" src="Validation.js"></script>
        
   
    </head>
    
    <body>
         <h2>UPDATE DONATIONS</h2>
    
    <form action = "adddonation.php" method= "post">
    <div class = "container">
    
         <div class= "donation">
         <label for="name"><b>Full Name</b></label>
         <input type="text" id="name" name="name" placeholder= "Enter Full Name " value="<?php echo $data['name'] ?>" required>
        <input type="hidden" name ="id" value="<?php echo $data['id']?>">
         <span id="error_initial"></span>
         </div>
         
         <div class= "donation">
         <label for="fname"><b>Address</b></label>
         <input type="text" id="address" name="address" placeholder= "Enter Address" value="<?php echo $data['address'] ?>" required>
         <span id="error"></span>
         </div>       
         
         <div class= "donation">       
         <label for="number"><b>Contact Number</b></label>
         <input type="text" id="number" name="number" placeholder= "Enter Contact Number" value="<?php echo $data['number'] ?>" required>          
         </div>
         
          <div class= "donation">
          <label for="type"><b>Amount Type</b></label>
          <label><input type="radio"  name="type" id= "cash" value = "Cash" <?php echo ($data['type'] =='Cash')? 'checked':'' ?>>Cash<input type="radio" name="type" id= "card" value = "Card" <?php echo ($data['type'] =='Card')? 'checked':'' ?>>Card<input type="radio"  name="type" id= "both" value = "Both" <?php echo ($data['type'] =='Both')? 'checked':'' ?>>Both</label>
          <span id="error_radio"></span>
          </div>
          
         <div class= "donation">
         <label for="amount"><b>Donation amount</b></label>
         <input type="number" min="1" step="any" id="amount" name="amount" value="<?php echo $data['amount'] ?>" placeholder= "Enter Amount" required>
         <span id="error_file"></span>
         </div>
        
         <div class= "donation">
         <input type="submit" name = "update" value = "Update" id = "submit_btn" ">
         </div>
           
    </div>    
        
    </form>
    
    </body>
</html>
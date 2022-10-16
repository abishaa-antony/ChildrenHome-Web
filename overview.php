<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel = "stylesheet" href="overview.css"> 
    <link rel = "stylesheet" href="viewtablestyle.css"> 
<style>

</style>
<?php
require_once('database.php');
$sql_donation = mysqli_query($conn,"SELECT COUNT(id) from donation");
$donation = mysqli_fetch_assoc($sql_donation);
    
$sql_child = mysqli_query($conn,"SELECT COUNT(id) from child");
$child = mysqli_fetch_assoc($sql_child);
    
$sql_staff = mysqli_query($conn,"SELECT COUNT(id) from staff");
$staff = mysqli_fetch_assoc($sql_staff);
    
$sql_labor = mysqli_query($conn,"SELECT COUNT(id) from labor");
$labor = mysqli_fetch_assoc($sql_labor);

    
?>
</head>
<body>

<div class="panel">
<p>Total Cash <br><br><label name= 'donation' ><?php echo  $donation['COUNT(id)'] ?></label>
<br>
<a href="viewdonation.php" target="iframe_dashboard" >View</a> 
</p>

</div>
    
<div class="panel">
<p>Total Children<br><br><label name= 'children'><?php echo  $child['COUNT(id)'] ?></label><br>
<a href="viewchild.php" target="iframe_dashboard" >View</a></p>

</div>
    
<div class="panel">
<p>Total Staff<br><br><label name= 'staff'><?php echo  $staff['COUNT(id)'] ?></label><br>
<a href="viewstaff.php" target="iframe_dashboard" >View</a></p>

</div>
    
<div class="panel">
<p>Total Labor<br><br><label name= 'labor'><?php echo  $labor['COUNT(id)'] ?></label><br>
<a href="viewlabor.php" target="iframe_dashboard" >View</a></p>

</div>
        <div class= "wraptable">
        <table class = "v-table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Type</th>
            <th>Amount</th>
            </tr>
        </thead>
  <?php
        require_once('database.php');
        $sql = "SELECT id, name, address, number, type, amount from donation ORDER BY date DESC LIMIT 5";
        $result = $conn->query($sql);
        if($result -> num_rows >0){
            while($row = $result -> fetch_assoc()){
            ?> 
            <tbody>
            <tr>
               <?php
                echo "<td>". $row["id"]."</td><td>". $row["name"]."</td><td>". $row["address"]."</td><td>". $row["number"]."</td><td>". $row["type"]."</td><td>". $row["amount"]."</td>";
               ?> 
                
            </tr>
            </tbody>
        <?php
            }
            echo "</table>" ;
        }
          else{
              echo "0 result";
          }
            mysqli_close($conn);
            ?>
        
      </table>
    </div>

</body>
    

</html> 
    
<html>
    <head>
    <title>View Donation Form</title>
     <link rel = "stylesheet" href="viewtablestyle.css">
    </head>
    
    <body>
        <h2>View Donation</h2>
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
            <th>Donated on</th>
            <th>Action</th>
            </tr>
            </thead>
         <?php
        require_once('database.php');
        $sql = "SELECT id, name, address, number, type, amount from donation";
        $result = $conn->query($sql);
        if($result -> num_rows >0){
            while($row = $result -> fetch_assoc()){
            ?> 
            <tbody>
            <tr>
               <?php
                echo "<td>". $row["id"]."</td><td>". $row["name"]."</td><td>". $row["address"]."</td><td>". $row["number"]."</td><td>". $row["type"]."</td><td>". $row["amount"]."</td><td>". $row["amount"]."</td>";
              ?> 
        
                <td>
                <a href="editdonation.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="deletedonation.php?id=<?php echo $row['id']; ?>">Delete</a>
                
                </td>
                
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
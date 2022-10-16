<html>
    <head>
    <title>View Staff Form</title>
    <link rel = "stylesheet" href="viewtablestyle.css"> 
    </head>
    
    <body>
       <h2>View Staff</h2>
       <div class= "wraptable">
        <table class = "v-table">
            <thead>
        
            <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Initial</th>
            <th>Date of Birth</th>
            <th>NIC</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Email</th>
            <th>Post</th>
            <th>Image</th>
            <th>Action</th>            
            </tr>
            </thead>
         <?php
        require_once('database.php');
        $sql = "SELECT id, fname, lname, initial, dob, nic, gender, contact, address, email, post, image FROM staff";
        $result = $conn->query($sql);
        if($result -> num_rows >0){
            while($row = $result -> fetch_assoc()){        
        ?>
            <tbody>
             <tr>
               <?php
                 echo "<td>". $row["id"]."</td><td>". $row["fname"]."</td><td>". $row["lname"]."</td><td>". $row["initial"]."</td><td>". $row["dob"]."</td><td>".$row["nic"]."</td><td>".$row["gender"]."</td><td>".$row["contact"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td><td>".$row["post"]."</td>";
              ?> 
                <td><?php echo '<img src = "data:image;base64,' .base64_encode($row['image']).'" alt = Image" >';?></td>
                <td>
                <a href="editstaff.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="deletestaff.php?id=<?php echo $row['id']; ?>">Delete</a>
                
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
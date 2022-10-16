<html>
    <head>
    <title>View Child Form</title>
    <link rel = "stylesheet" href="viewtablestyle.css">
   
    </head>
    
    <body>
        <h2>View Child</h2>
     <div class= "wraptable">
        <table class = "v-table">
            <thead>
         
            <tr>
            <th>ID</th>
            <th>Name with Initial</th>
            <th>First Name</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Image</th>
            <th>actions</th>
            </tr>
             </thead>
         <?php
        require_once('database.php');
        $sql = "SELECT id, initial, name, dob, gender,image from child";
        $result = $conn->query($sql);
        if($result -> num_rows >0){
            while($row = $result -> fetch_assoc()){
            ?> 
            <tbody>
            <tr>
               <?php
                echo "<td>". $row["id"]."</td><td>". $row["initial"]."</td><td>". $row["name"]."</td><td>". $row["dob"]."</td><td>". $row["gender"]."</td>";
              ?> 
                <td><?php echo '<img src = "data:image;base64,' .base64_encode($row['image']).'" alt = Image" >';?></td>
                <td>
                <a href="editchild.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="deletechild.php?id=<?php echo $row['id']; ?>">Delete</a>
                
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
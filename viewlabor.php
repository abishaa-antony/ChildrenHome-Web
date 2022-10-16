<html>
    <head>
    <title>View Laborer Form</title>
    <link rel = "stylesheet" href="viewtablestyle.css">
    </head>
    
    <body>
      <h2>View Labor</h2>
       <div class= "wraptable">
        <table class = "v-table">
            <thead>
            <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>First Name</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Company</th>
            <th>Action</th>
            </tr>
            </thead>
         <?php
        require_once('database.php');
        $sql = "SELECT id,fullname, fname, bdate, gender, contact, address, company FROM labor";
        $result = $conn->query($sql);
        if($result -> num_rows >0){
            while($row = $result -> fetch_assoc()){
            ?>
            <tbody>
            <tr>
                <?php
                echo "<td>". $row["id"]."</td><td>". $row["fullname"]."</td><td>". $row["fname"]."</td><td>". $row["bdate"]."</td><td>". $row["gender"]."</td><td>".$row["contact"]."</td><td>".$row["address"]."</td><td>".$row["company"]."</td>";
                ?>
                 <td>
                <a href="editlabor.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="deletelabor.php?id=<?php echo $row['id']; ?>">Delete</a>
               
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
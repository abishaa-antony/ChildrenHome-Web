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
            
            <th>Labor_ID</th>
            <th>Salary</th>
            <th>Action</th>
            </tr>
            </thead>
         <?php
        require_once('database.php');
        $sql = "SELECT id,salary FROM labor";
        $result = $conn->query($sql);
        if($result -> num_rows >0){
            while($row = $result -> fetch_assoc()){
            ?>
            <tbody>
            <tr>
                <?php
                echo "<td>". $row["id"]."</td><td>". $row["salary"]."</td>";
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
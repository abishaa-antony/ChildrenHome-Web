<html>
    <head>
        <title>DashBoard</title>
        <link rel = "stylesheet" href="Dashboard.css">
        <script src="https://kit.fontawesome.com/7d11e47a78.js" crossorigin="anonymous"></script>
       
        </head>
    <body>
    <div class = "header">
       <p>SAMADHI CHILDREN HOME</p> 
    </div>
    <div class="NavigationBar">
            <a href="overview.php" target="iframe_dashboard">Overview</a>
            <button class="DropDownMenu"><i class="fas fa-tachometer-alt"></i>Donations<i class="fas fa-caret-down"></i></button>
            <div class="DropDown_Container">
            <a href="adddonation.php" target="iframe_dashboard" >Add Donations</a>
           
            <a href="viewdonation.php" target="iframe_dashboard">View Donations</a>
            </div>
        <button class="DropDownMenu"><i class="fal fa-clipboard-user"></i>Staff<i class="fas fa-caret-down"></i></button>
            <div class="DropDown_Container">
            <a href="addstaff.php" target="iframe_dashboard" name = "addstaff">Add staffs</a>
            <a href="viewstaff.php" target="iframe_dashboard" >View Staffs</a>
            </div>
        <button class="DropDownMenu"><i class="fas fa-child"></i>Child<i class="fas fa-caret-down"></i></button>
            <div class="DropDown_Container">
            <a href="addchild.php" target="iframe_dashboard">Add child</a>
            <a href="viewchild.php" target="iframe_dashboard">View child</a>
        </div>
        <button class="DropDownMenu"><i class="fas fa-digging"></i>Labors<i class="fas fa-caret-down"></i></button>
            <div class="DropDown_Container">
            <a href="addlabor.php" target="iframe_dashboard">Add Labor</a>
            <a href="viewlabor.php" target="iframe_dashboard">View Labor</a>
            <a href="viewsalary.php"  target="iframe_dashboard">View Labor salary</a>
           
        </div>
        <a href="logout.php">Logout</a>
    </div>
    <div id="contentframe" style="top: 160px; left: 100px;">
<iframe name="iframe_dashboard"  src="viewframe.php" style="height:98%;width:85%;position:relative;top:42px;bottom:10px;left:190px;right:10px">&lt;/div&gt;
</iframe></div>
     
    <script>
        var dropdown = document.getElementsByClassName("DropDownMenu");
        var i;
        for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
            } else {
            dropdownContent.style.display = "block";
            }
        });
    }    
        
    </script>
    </body>
</html>
var document;    

function allLetter()
      { 
      var error_fname = document.getElementById("error_fname");
      var input_fname = document.getElementById("fname");
      var error_lname = document.getElementById("error_lname");
      var input_lname = document.getElementById("lname");
      var error_name = document.getElementById("error_initial");
      var input_name = document.getElementById("name");
      var error_gender = document.getElementById("error_gender");
       var input_male = document.getElementById("m_gender");
      var input_female = document.getElementById("fgender");
      var numbers = /^[0-9]+$/;
          
     if(input_fname.value.match(numbers))
      {
        error_fname.textContent = " Valid Name is required!";
        error_fname.style.color = 	"#A52A2A"; 
         
      }
     else if(input_lname.value.match(numbers))
      {
        error_lname.textContent = " Valid Name is required!";
        error_lname.style.color = 	"#A52A2A"; 
         
      }
    if(input_name.value.match(numbers))
      {
        error_name.textContent = " Valid Name is required!";
        error_name.style.color = 	"#A52A2A"; 
          return false;
      }
    if(input_male.checked ==  false && input_female.checked ==  false){
       error_gender.textContent = "Gender is required!";
    error_gender.style.color = 	"#A52A2A";    
      }
          return false;
      
      }
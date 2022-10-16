var document;    

function allLetter()
      { 
      var errorLabel = document.getElementById("error");
      var input = document.getElementById("fullname");
      var errorLabel_initial = document.getElementById("error_initial");
      var input_initial = document.getElementById("initials");
       var errorLabel_calender = document.getElementById("error_date");
      var input_calender = document.getElementById("bdate");
      var input_male = document.getElementById("male");
      var input_female = document.getElementById("female");
      var errorLabel_radio = document.getElementById("error_radio");
       var input_file = document.getElementById("empImg");
      var errorLabel_file = document.getElementById("error_file");
      var numbers = /^[0-9]+$/;
       
      if(input_initial.value   === "" ){
         errorLabel_initial.textContent = "  Name with Initials is required!";
         errorLabel_initial.style.color = 	"#A52A2A"; 
          return false;
      }
      if(input_initial.value.match(numbers))
      {
        errorLabel_initial.textContent = " Valid Initial is required!";
         errorLabel_initial.style.color = 	"#A52A2A"; 
           return false;
      }
       if(input.value  === ""){
      errorLabel.textContent = "Full Name is required!";
      errorLabel.style.color = 	"#A52A2A"; 
         return false;
      }
      
       if(input.value.match(numbers))
      {
       errorLabel.textContent = " Valid Name is required";
       errorLabel.style.color = 	"#A52A2A";
      return false;
      }
     if(input_calender.value  === ""){
      errorLabel_calender.textContent = "Date is required!";
      errorLabel_calender.style.color = 	"#A52A2A"; 
         return false;
      }
      if(input_male.checked ==  false && input_female.checked ==  false){
       errorLabel_radio.textContent = "Gender is required!";
      errorLabel_radio.style.color = 	"#A52A2A";   
         return false;
      }
     if(input_file.files[0].size <1){
       errorLabel_file.textContent = " File too small. Please select a file more than 1 MB.!";
       errorLabel_file.style.color = 	"#A52A2A"; 
          return false;
      }
       if(input_file.files[0].size > 4){
       errorLabel_file.textContent = "File too large. Please select a file less than 4 MB.";
       errorLabel_file.style.color = 	"#A52A2A";  
           return false;
      }
      else
      {
       errorLabel_file.textContent = "File is:" + input_file.files[0].size;
       errorLabel_file.style.color = 	"#A52A2A"; 
      
      }
           return false;
      }
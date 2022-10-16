var document;    

function allLetter()
      { 
      var error_name = document.getElementById("error_name");
      var input_initial = document.getElementById("name");
      var error_fname = document.getElementById("error_fname");
      var input_fname = document.getElementById("fname");
       var error_date = document.getElementById("error_date");
      var input_calender = document.getElementById("bdate");
      var input_male = document.getElementById("male");
      var input_female = document.getElementById("female");
      var error_gender= document.getElementById("error_gender");
    var error_number = document.getElementById("error_number");
      var input_number = document.getElementById("number");
          var error_address = document.getElementById("error_address");
      var input_address = document.getElementById("address");
      
      var numbers = /^[0-9]+$/;
       
      if(input_initial.value   === "" ){
         error_name.textContent = "  Name with Initials is required!";
         error_name.style.color = 	"#A52A2A"; 
          return false;
      }
      if(input_initial.value.match(numbers))
      {
        error_name.textContent = " Valid Initial is required!";
        error_name.style.color = 	"#A52A2A"; 
           return false;
      }
       if(input_fname .value  === ""){
        error_fname.textContent = "Full Name is required!";
      error_fname.style.color = 	"#A52A2A"; 
         return false;
      }
      
       if(input_fname .value.match(numbers))
      {
      error_fname.textContent = " Valid Name is required";
       error_fname.style.color = 	"#A52A2A";
      return false;
      }
     if(input_calender.value  === ""){
       error_date.textContent = "Date is required!";
       error_date.style.color = 	"#A52A2A"; 
         return false;
      }
      if(input_male.checked ==  false && input_female.checked ==  false){
       error_gender.textContent = "Gender is required!";
       error_gender.style.color = 	"#A52A2A";   
         return false;
      }
          
       if(input_address .value  === "")
      {
     error_address.textContent = " Address is required";
      error_address.style.color = 	"#A52A2A";
      return false;
      }
    
           return false;
      }
const form=document.querySelector("form");
let radioBtn=document.querySelectorAll("input[name='genderSelect']");
let address=document.querySelector("#address");
let workingPlace=document.querySelector("#workingPlace");
let Name=document.querySelector("#name");
let eMail=document.querySelector("#eMail");
let mobileNumber=document.querySelector("#mobileNumber");
let emailCheck=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


//'/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/'
let mobileNumberCheck=/^[6789][0-9]{9}/

let error=false;



mobileNumber.addEventListener('keyup',()=>{
     if ((mobileNumber.value.trim()=='' || (!(mobileNumberCheck.test(mobileNumber.value.trim())))  || isNaN(mobileNumber.value.trim()))) {

          mobileNumber.style.border='1px solid red';
          error=true;
     }
     else{
         if (mobileNumber.value.trim().length==10)
         {
              mobileNumber.style.border='';
             error=false;
         }
     }
});

Name.addEventListener('keyup',()=>{
     if (Name.value.trim()=='') {
          Name.style.border='1px solid red';
          error=true;
     }
     else{
          Name.style.border='';
          error=false;
     }
});
workingPlace.addEventListener('keyup',()=>{
     if (workingPlace.value.trim()=='') {
          workingPlace.style.border='1px solid red';
          error=true;
     }
     else{
          workingPlace.style.border='';
          error=false;
     }
});
address.addEventListener('keyup',()=>{
     if (address.value.trim()=='') {
          address.style.border='1px solid red';
          error=true;
     }
     else{
          address.style.border='';
          error=false;
     }
});

eMail.addEventListener('keyup',()=>{

     if (eMail.value.trim()=='' || (!(emailCheck.test(eMail.value.trim())))) {
          eMail.style.border='1px solid red';
          error=true;
     }
     else{
          eMail.style.border='';
          error=false;
     }
     // console.log(emailCheck.test(eMail.value));
});

function checkRadio() {
     for (var index = 0 ; index < radioBtn.length ;index++) {
          if(radioBtn[index].checked)
          {
               return false;
          }
             
     }return true; 

}

 window.onload = function(){form.reset()};
let value=false;

function val(){

     // e.preventDefault();
     
     console.log(error);
     // console.log((checkRadio()));
     // console.log(e);
  
     if (error || (checkRadio())) {
          swal({
               title: "Oh no!",
               text: "Enter the form details carefully",
               icon: "error",
               button: "OK",
               }); 
               return false;
     }
     else{
              return true;
     }
}
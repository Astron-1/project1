
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



mobileNumber.addEventListener('keydown',(e)=>{
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

Name.addEventListener('keydown',(e)=>{
     if (Name.value.trim()=='') {
          Name.style.border='1px solid red';
          error=true;
     }
     else{
          Name.style.border='';
          error=false;
     }
});
workingPlace.addEventListener('keydown',(e)=>{
     if (workingPlace.value.trim()=='') {
          workingPlace.style.border='1px solid red';
          error=true;
     }
     else{
          workingPlace.style.border='';
          error=false;
     }
});
address.addEventListener('keydown',(e)=>{
     if (address.value.trim()=='') {
          address.style.border='1px solid red';
          error=true;
     }
     else{
          address.style.border='';
          error=false;
     }
});

eMail.addEventListener('keydown',(e)=>{

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
               error=false;
               break;
          }
          error=true;    
     }

}

window.onload = function(){form.reset()};

form.addEventListener('submit',(e)=>{

     e.preventDefault();
     console.log(error);
     console.log(e);
     checkRadio();
     if (error) {
          swal({
               title: "Oh no!",
               text: "Enter the form details carefully",
               icon: "error",
               button: "OK",
               }); 
     } else{
          $.ajax({
              url:"index.php",
              method:"post",
              data:{ error : error} 
          });
     } 
});

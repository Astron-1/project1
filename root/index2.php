
<?php

if(isset($_POST['register']) ){
    
          $fullName = mysqli_real_escape_string($conn,$_POST['fullName']);
          $eMail = mysqli_real_escape_string($conn,$_POST['eMail']);
          $mobileNumber = mysqli_real_escape_string($conn,$_POST['mobileNumber']);
          $occupation = mysqli_real_escape_string($conn,$_POST['occupation']);
          $workingPlace = mysqli_real_escape_string($conn,$_POST['workingPlace']);
          $genderSelect = mysqli_real_escape_string($conn,$_POST['genderSelect']);
          $address = mysqli_real_escape_string($conn,$_POST['address']);
         
try {
     
     $query= "INSERT INTO users (`Name`, `Email`, `Gender`, `Mob_no`, `Occupation`, `College_name`, `Address`, `submit_at`) VALUES ('$fullName','$eMail','$genderSelect','$mobileNumber','$occupation','$workingPlace','$address',current_timestamp());";
     
     $data=mysqli_query($conn,$query);
     
       if($data){
            ?>
           <script>
                swal({
                     title: "Good job!",
                     text: "Your data has been submitted !",
                     icon: "success",
                     button: "OK",
                     }); 
           </script>
<?php 
            
       }else{
           ?>
           <script> 
                swal({
                     title: "Oh no!",
                     text: "Some Error Occured!",
                     icon: "Error",
                     button: "OK",
                     }); 
           </script>
<?php 
           
       }
} catch (Throwable $th) {

    ?>
    <script> 
         swal({
              title: "Oh no!",
              text: "<?php echo $th->getMessage(); ?>",
              icon: "error",
              button: "OK",
              }); 
    </script>
<?php 
     }
}
       
?>



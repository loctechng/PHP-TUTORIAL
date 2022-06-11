<?php
   $studentName = '';
   $email = '';

   $errors = array(
       'studentName'=>'','email'=>''
    );

   if(isset($_GET['submit'])) {

       // Check for Student Name
       if ( empty($_GET['studentName']) ){
           $errors['studentName'] = 'A Student Name is required <br />';
       } else {
            $studentName = $_GET['studentName'];
            // echo htmlspecialchars($_GET['studentName']);
       }
       
       // Check for Email
       if ( empty($_GET['email']) ){
           $errors['email'] = 'An email is required <br />';
       } else {
            // echo htmlspecialchars($_GET['email']);
            $email = $_GET['email'];
            if ( !filter_var( $email, FILTER_VALIDATE_EMAIL) ) {
                $email['email'] = "The email is invalid";
            } 
       }
   }
?>



<!DOCTYPE html>
<html>
    <?php include('header.php'); ?>

    <div class="simpleForm">
        <form action="" method="GET">
            <label for="name" >Student Name: </label>    
            <input type="text" id="name" name="studentName" value="<?php echo $studentName ?>" >
            <div style="color:red;"> <?php echo "error";?> </div>

            <label for="email">Email: </label>    
            <input type="text" id="email" name="email" value="<?php echo $email ?>">
            <div style="color:red;"> <?php echo "error";?> </div>
            
            <input type="submit" value="Click me" name="submit">
        </form>
    </div>
    
    <?php include('footer.php'); ?>
</html>
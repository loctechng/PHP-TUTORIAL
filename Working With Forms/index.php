<?php
    // connect to database
    // mysqli_connect takes 4 arguments: 
    // 1. hostname, 2. username, 3. password, 4. databaseName

    $conn = mysqli_connect('localhost', 'paul', '123456789ab', 'studentdetails' );

    if($conn == true){
        echo "<div class='error-container'><p class='error-message bg-green'>Connection was made.</p></div> <script>var err_red = document.querySelector('.error-container'); setTimeout(()=>{err_red.style.display = 'none'}, 3000)</script>";
    } else{
        echo "<div class='error-container bg-red'><p class='error-message bg-red'>Connection error: " . mysqli_connect_error() . " </p></div> <script>var err_red = document.querySelector('.error-container'); setTimeout(()=>{err_red.style.display = 'none'}, 3000)</script>";
    }



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
                $errors['email'] = "The email is invalid";
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
            <div style="color:red;"> <?php echo $errors['studentName'];?> </div>

            <label for="email">Email: </label>    
            <input type="text" id="email" name="email" value="<?php echo $email ?>">
            <div style="color:red;"> <?php echo $errors['email'];?> </div>
            
            <input type="submit" value="Click me" name="submit">
        </form>
    </div>
    
    <?php include('footer.php'); ?>
</html>
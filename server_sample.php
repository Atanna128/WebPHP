<?php

// initializing variables
$username = "";
$email    = "";
$hobbies  = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'lab');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $gender = mysqli_real_escape_string($db,$_POST['gender']);
  $hobbies = implode(",",$_POST["hobbies"]);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error into $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Userdata WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      // array_push($errors, "email already exists");
      // block
      
    }
  }else{
    // Finally, register user if there are no errors in the form
    $query = "INSERT INTO `Userdata`(`firstname`, `lastname`,`email`,`phonenumber`,`password`,`gender`,`hobbies`) VALUES ('$firstname', '$lastname','$email','$phonenumber','$password','$gender','$hobbies')";
    mysqli_query($db, $query);
  }
  header('location: printdatabase.php');
  

}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/aja+++x/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Default form register -->
<form class="text-center border border-light p-5" method="post" action="/lab2/server_sample.php">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name">
        </div>
    </div>
    <!-- E-mail -->
    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
    <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Password">
    <input type="text" id="phonenumber" name="phonenumber" class="form-control mb-4" placeholder="Phonenumber">

    Gender:
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="other") echo "checked";?>
    value="other">Other
    
    <!-- a checkbox named "hobbies", values: Reading, Sport, Music, ... -->
    <br>
    <br>
    Hobby:
    
    <input type="checkbox" name="hobbies[]" value="Reading">Reading
    <input type="checkbox" name="hobbies[]" value="Sleeping">Sleeping
    <input type="checkbox" name="hobbies[]" value="Wibu">Wibu
    <input type="checkbox" name="hobbies[]" value="NEET">NEET
    

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="reg_user">Sign in</button>

</form>
<!-- Default form register -->
</body>
</html>
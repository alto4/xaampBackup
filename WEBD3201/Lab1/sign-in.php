<?php
    $title = "Login Page";
    $file = "sign-in.php";
    $description = "Lab #1 is captured in this page and demonstrates several skills using PHP, including: database set-up, user login functionality, and...";
    $date = "October 2, 2020";

    include "./includes/header.php";

    // Upon successful login, redirect user back to the dashboard page
    setMessage("You successfuly logged in dude!");
    redirect("./dashboard.php");
?>   

<form class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <h1><?php echo $message; ?></h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>

<?php
include "./includes/footer.php";
?>    
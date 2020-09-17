<?php
    $title = "Home";
    $file = "index.php";
    $description = "Lab #1 is captured in this page and demonstrates several skills using PHP, including: database set-up, user login functionality, and...";
    $date = "October 2, 2020";

    include "./includes/header.php";

    // Redirect a user to the sign-in page if not logged in or registered
    //redirect("sign-in.php")
?>

<h1 class="cover-heading">Cover your page.</h1>
<h1><?php echo $message; ?></h1>
<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
<p class="lead">
    <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
</p>

<?php
    include "./includes/footer.php";
?>    
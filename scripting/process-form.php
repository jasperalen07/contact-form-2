<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you would typically send the email or save the data to a database

    // Redirect to success page
    header('Location: sucess.php');
    exit;
} else {
    // If the form is not submitted, redirect to the form page
    header('Location :process-form.php');
    exit;
}
?>
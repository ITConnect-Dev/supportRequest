<?php
if(isset($_POST['requestForm'])){
    $to = "jmckenzie@it-connect.com"; // this is your Email address
    $from = "jmckenzie@it-connect.com"; // this is your Email address
    $auth_name = $_POST['authName'];
    $req_name = $_POST['reqName'];
    $user_name = $_POST['username'];
    $position_name = $_POST['position'];
    $subject = "Form submission";
    $message = $auth_name . " authorized this request by:" . $req_name . " for:" . "\n\n" . $_POST[$user_name . " " . $position_name . " "];

    mail($to,$subject,$message, "From: <$from>");
    echo "Mail Sent. Thank you " . $req_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

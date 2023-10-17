<?php 
if 
($_SERVER["REQUEST_METHOD"]
== "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"]

    // Optional: Perform additional processing or validation here
    //Example: Saving form data to a file
    $file = fopen("form-data.txt", "a");
    fwrite($file, "Name:" . $name . "\n");
    fwrite($file, "Email:" . $email . "\n");
    fwrite($file, "Message" . $message . "\n");
    fwrite($file, "----------\n");
    fclose($file);

    // Optional: send email notification, redirect to a thank you page, etc.
    http_response_code(200);
    //Return success status
}else{
    http_response_code(400);
    //Return error status
}
?>
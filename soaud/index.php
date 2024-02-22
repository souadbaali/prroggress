<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <form action="index.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" >
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" ></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>


</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Open the file in append mode
    $file = fopen("form_data.txt", "a");

    // Write form data to the file
    fwrite($file, "Name: " . $name . "\n");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Message: " . $message . "\n\n");

    // Close the file
    fclose($file);

    // Provide feedback to the user
    echo "Form data has been saved successfully!";
} else {
    echo "Invalid request!";
}
?>

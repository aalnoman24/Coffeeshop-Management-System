<?php

include('db.php');
$error = "";
$success = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and sanitize inputs
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $question = mysqli_real_escape_string($conn, trim($_POST['question']));
    $review = mysqli_real_escape_string($conn, trim($_POST['review']));

    // Basic validation
    if (empty($email) || empty($question) || empty($review)) {
        $error = "Please fill out all required fields.";
    } else {
        // Prepare insert query
        $sql = "INSERT INTO contact (email, question, review) 
                VALUES ('$email', '$question', '$review')";
        
        // Execute the query and check if it was successful
        if ($conn->query($sql) === TRUE) {
            $success = "Your message has been successfully submitted!";
            // Redirect to avoid form resubmission on refresh
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
</head>

<body class="main_bg">

    <div id="contacts" class="forth_sec">
        <div class="left_cts">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

                <!-- Display error or success message -->
                <?php if (!empty($error)): ?>
                    <p class="error-message"><?php echo $error; ?></p>
                <?php endif; ?>
                <?php if (!empty($success)): ?>
                    <p class="success-message"><?php echo $success; ?></p>
                <?php endif; ?>

                <p>Email</p>
                <input type="email" name="email" placeholder="Enter your email" style="width: 500px;" required><br>
                <p>Through your Question</p>
                <input type="text" name="question" placeholder="Ask any question" style="width: 500px;" required><br>
                <p>Other query or review</p>
                <textarea name="review" cols="50" rows="6" style="width: 500px;" required></textarea><br>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="right_cts">
            <h2>Where to find us?</h2>
            <p>Varendra University, Rajshahi</p>
            <h2>Contacts</h2>
            <p>Email: asdfgh123@gmail.com</p>
            <p>Phone: 1234567890</p>
            <h2>Opening hours</h2>
            <p>Sunday to Friday 8:00 AM to 8:00 PM</p>
            <h2>Closed on Saturday</h2>
        </div>
    </div>

</body>

</html>

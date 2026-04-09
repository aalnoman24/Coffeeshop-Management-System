<?php
 
 include('db.php');
$error = "";
$success = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and sanitize inputs
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $people = (int) $_POST['people'];
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $phone_number = mysqli_real_escape_string($conn, trim($_POST['number']));

    // Basic validation
    if (empty($name) || empty($email) || empty($people) || empty($time) || empty($date) || empty($phone_number)) {
        $error = "Please fill out all required fields.";
    } else {
        // Prepare insert query
        $sql = "INSERT INTO reserve (name, email, people, time, date, number) 
                VALUES ('$name', '$email', '$people', '$time', '$date', '$phone_number')";
        
        // Execute the query and check if it was successful
        if ($conn->query($sql) === TRUE) {
            $success = "Your reservation has been successfully submitted!";
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
    <link rel="stylesheet" href="reserv.css">
    <title>Table booking</title>
</head>

<body class="main_bg">

    <div class="form">
        <div class="form-text">
            <h1><span><img src="img/art-1.png" alt=""></span>Book Now <span><img src="art-1.png" alt=""></span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit.</p>
        </div>
        <div class="main-form">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                
                <!-- Display error or success message -->
                <?php if (!empty($error)): ?>
                    <p class="error-message"><?php echo $error; ?></p>
                <?php endif; ?>
                <?php if (!empty($success)): ?>
                    <p class="success-message"><?php echo $success; ?></p>
                <?php endif; ?>

                <div>
                    <span>Your full name ?</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="email" id="email" placeholder="Write your email here..." required>
                </div>
                <div>
                    <span>How many people ?</span>
                    <select name="people" id="people" required>
                        <option value="">---People---</option>
                        <option value="1">1 Person</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                    </select>
                </div>
                <div>
                    <span>What time ?</span>
                    <input type="text" name="time" id="time" placeholder="Time" required>
                </div>
                <div>
                    <span>What is the date ?</span>
                    <input type="date" name="date" id="date" placeholder="Date" required>
                </div>
                <div>
                    <span>Your phone number ?</span>
                    <input type="number" name="number" id="number" placeholder="Write your number here..." required>
                </div>
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>

            </form>
        </div>
    </div>

</body>

</html>

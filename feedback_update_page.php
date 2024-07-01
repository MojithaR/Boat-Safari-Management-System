<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once('code.php');

    $query = "SELECT * FROM feedback WHERE id = '$id'";
    $result_set = mysqli_query($connection, $query);

    if (!$result_set) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result_set);

        // Populate the form fields with existing data
        $full_name = $row['Full_name'];
        $phone_number = $row['Phone_number'];
        $email = $row['Email'];
        $gender = $row['Gender'];
        $feedback = $row['Feedback'];
    }
}

// Handle form submission to update the table
if (isset($_POST['submit'])) {
    $full_name = $_POST['Full_name'];
    $phone_number = $_POST['Phone_number'];
    $email = $_POST['Email'];
    $gender = $_POST['Gender'];
    $feedback = $_POST['feedback'];

    // Perform the update query here with the new data
    $update_query = "UPDATE feedback SET Full_name = '$full_name', Phone_number = '$phone_number', Email = '$email', Gender = '$gender', Feedback = '$feedback' WHERE id = '$id'";

    $update_result = mysqli_query($connection, $update_query);

    if ($update_result) {
        // Update successful
        echo "Record updated successfully!";
    } else {
        // Update failed
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="css/selectquerycss.css">
</head>
<body>

<div class="toform">
    <form action="" class="forms" method="post">
        <p class="pform">Full Name:
            <input type="text" name="Full_name" placeholder="Full_name" value="<?php echo $full_name ?? ''; ?>" required>
        </p>

        <p class="pform">Phone number:
            <input type="text" name="Phone_number" placeholder="Phone_number" value="<?php echo $phone_number ?? ''; ?>" required>
        </p>

        <p class="pform">Email:
            <input type="email" name="Email" placeholder="Email" value="<?php echo $email ?? ''; ?>" required>
        </p>

        <p class="pform">Gender:
            Male
            <input type="radio" name="Gender" value="Male" <?php echo isset($gender) && $gender === 'Male' ? 'checked' : ''; ?> required>
            Female
            <input type="radio" name="Gender" value="Female" <?php echo isset($gender) && $gender === 'Female' ? 'checked' : ''; ?> required>
        </p>

        <label for="" class="pform">Add feedback: </label> <br><br>
        <textarea name="feedback" cols="46" rows="4" required><?php echo $feedback ?? ''; ?></textarea>

        <p class="pform">
            <button type="submit" name="submit">Submit</button>
        </p>
    </form>
</div>




    
</body>
</html>



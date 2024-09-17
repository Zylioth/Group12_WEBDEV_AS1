<?php
session_start();
include '../database/db.php'; // Your database connection file

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php"); // Redirect to login page if not logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $user_id = $_SESSION['user_id']; // Assuming the logged-in user’s ID is stored in session
    $appointment_date = $_POST['date'];
    $appointment_time = $_POST['time'];
    $details = $_POST['details'];

    // Check if an appointment already exists for the selected date and time
    $check_query = "SELECT * FROM appointments WHERE appointment_date = ? AND appointment_time = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("ss", $appointment_date, $appointment_time);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Appointment already exists for this slot
        echo "<p>Sorry, the selected time slot is already booked. Please choose another time.</p>";

        echo "
            <script>
                setTimeout(function() {
                    window.location.href = '../index.php'; // balik ke home sendiri
                }, 3000);
            </script>
            ";
    } else {
        // Insert new appointment
        $insert_query = "INSERT INTO appointments (user_id, appointment_date, appointment_time, details) 
                         VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("isss", $user_id, $appointment_date, $appointment_time, $details);
        
        if ($stmt->execute()) {
            // Successful booking
            echo "<p>Appointment booked successfully!</p>";
            
            echo "
            <script>
                setTimeout(function() {
                    window.location.href = '../index.php'; // balik ke home after success
                }, 3000);
            </script>
            ";

        } else {
            // Error handling
            echo "<p>There was an error booking your appointment. Please try again.</p>";

            echo "
            <script>
                setTimeout(function() {
                    window.location.href = '../index.php'; // balik ke home sendiri
                }, 3000);
            </script>
            ";
        }
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<p>Invalid request method.</p>";
}
?>

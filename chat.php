<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "chat");

// Check for a form submission
if (isset($_POST["submit"])) {
    $query = "INSERT INTO chat (username, message) VALUES ('" . $_POST['username'] . "', '" . $_POST['message'] . "')";
    $conn->query($query);
}

// Retrieve the latest messages from the database
$query = "SELECT * FROM chat ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $query);

// Loop through the messages and display them on the page
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p>" . htmlspecialchars($row["username"]) . ": " . htmlspecialchars($row["message"]) . "</p>";
}

// Close the database connection
mysqli_close($conn);
?>

<!-- Form for adding new messages -->
<form method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br>
    <input type="submit" name="submit" value="Send">
</form>

<style>
    /* Chat messages */
#messages {
  display: flex;
  flex-direction: column;
}

.message {
    display: flex;
    align-items: flex-start;
    margin-bottom: 10px;
}

.username {
    font-weight: bold;
    margin-right: 10px;
}

/* Form for adding new messages */
form {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 30%;
}

label {
    margin-bottom: 5px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}

input[type="text"],
textarea {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: palevioletred;
    border: none;
    color: white;
    padding: 8px 16px;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: palevioletred;
}
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>

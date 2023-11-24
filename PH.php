    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];

        // Perform additional validation and database operations as needed

        // Redirect to confirmation page
        header("Location: C:\Users\OMKAR REDDY\Desktop\submit.html");
        exit();
    }
    ?>
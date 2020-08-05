<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'jabalpur-agri-bill');

// Uploads files
if (isset($_POST['import'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename1 = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename1;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    // $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['xlsx'])) {
        echo "You file extension must be .xlsx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name) VALUES ('$filename1')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>
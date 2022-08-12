<?php
// ===> we are checking if the button is submitted
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];  // Find file name
    $tmp_name = $_FILES['file']['tmp_name'];  // Find file Temporary location
    $size = $_FILES['file']['size'];  // Find file size
    $error = $_FILES['file']['error'];  // Find errors
    // ===> [explode] spread a string in different strings
    // ===> we want to split our img name whenever ever the punctuation is found

    // ===> explode from punctuation mark
    $tempExtension = explode('.', $name);
    // when you are uploadiing a file with capital it should be changed to lowr case
    // end($tempExtension) want the last element of the extension
    $fileExtension = strtolower(end($tempExtension));

    // Allowed extensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    // check if the file that is been uploaded is allowed
    if (in_array($fileExtension, $isAllowed)) {
        // 0 is no error
        // 1 = error
        if($error === 0) {
            // ===> php works with kilobyte
            // ===> 2.3 megabyte = 23,000 kilobyte
            if ($size < 10000) {
                // ===> generate id base on the micro time.
                $newFileName = uniqid('', true) . "." . $fileExtension;
                $fielDestination = "uploads/" . $newFileName;
                move_uploaded_file($tmp_name, $fielDestination);
                // it sends raw http header to the client
                // ===> when ever the button is clicked we want to be redirected to the same place
                header("Location: files.php?uploadedsuccess");
                echo "<h1>good</h1>";

            } else {
                "<h2>Sorry your file size is too big</h2> ";
            }

        } else {
            echo "<h1>Sorry, there was an error!, Try it again</h1>";
        }

    } else {
        echo "<h4>Sorry, your file type is not accepted</h4>";

    }
}

// ======>if you upload a img with the file name that is already exist the image your uploaded will overwrite the image that was there b4 because it the same name <=========
// test.png - text.png they wil overwrite each other

?>
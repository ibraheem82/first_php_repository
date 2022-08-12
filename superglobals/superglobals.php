    <?php
    // ===> THEY ARE VARIABLES THAT ARE AVAILABLE FROM THE ANY PART OF THE CODES
    // =====> Superglobers <=====
    // ===> GLOBALS 
    // ===> $_POST -> collect data from the HTML (invisible)
    // ===> $_GET 
    // ===> $_SERVER 
    // ===> $_COOKIE 
    // ===> $_SESSION 
    // ===> $_FILES 

    # $_SERVER SUPERGLOBAL

    // Create Server Array

    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        // ===> whenever you are submitting a form, if you want to submit to the same page you are on, you can put this as inside the form action ['PHP_SELF']
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        // ===> TO GET THE ABSOLUTE PATH
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
    ];

    // print_r($server);

    // echo $server['Host Server Name'];
        // echo $server['Host Header'];
        // echo $server['Server Software'];


    // Create Client Array
    $client = [
        'Client System info' => $_SERVER['HTTP_USER_AGENT'],
        // ===> CLIENT IP ADDRESS
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port'  => $_SERVER['REMOTE_PORT']

    ];
    // print_r($client);
?>
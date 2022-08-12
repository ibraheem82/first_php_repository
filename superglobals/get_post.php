<?php 

    // ===> ['isset'] will check to see if the value is set.
    if (isset($_GET['name'])) {
        // ===>  print_r($_GET);
        //  ===> echo $_GET['name'];
        // ===> ['htmlentities'] prevent csrf attack in php, if security measures, dealing with the content that the user can submit to the server.
            // echo htmlentities($_GET['name']);
            $name =  htmlentities($_GET['name']);
            // echo $name;

    }


    // if (isset($_POST['name'])) {
    //       print_r($_POST);
        //  ===> echo $_GET['name'];
        // ===> ['htmlentities'] prevent csrf attack in php, if security measures, dealing with the content that the user can submit to the server.
            // echo htmlentities($_GET['name']);
    //          $name =  htmlentities($_POST['name']);
    //         echo $name;

    // }




        // ===> ['$_REQUEST'] is another way to get data, regard less if the method is POST or GET it is still going to work.
//     if (isset($_REQUEST['name'])) {
//         // print_r($_POST);
//       //  ===> echo $_REQUEST['name'];
//       // ===> ['htmlentities'] prevent csrf attack in php, if security measures, dealing with the content that the user can submit to the server.
//           // echo htmlentities($_GET['name']);
//            $name =  htmlentities($_POST['name']);
//           echo $name;

//   }

    // ===> ['QUERY_STRING'] will give us the entire string that is been submitted.
    // echo $_SERVER['QUERY_STRING'];

    ?>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

<!-- ===> ['action'] is the page we are submitting to. -->
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name" value="">
        </div>
        
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
    </form>
     <!-- ===> [we can send along the QUERY_STRINGs,in the url itself with using a form. ] -->
     <ul>
               <li>
                   <a href="get_post.php?name=Ibraheem">Ibraheem</a>
               </li> 
               <li>
                   <a href="get_post.php?name=Omikunle">Omikunle</a>
               </li> 
            </ul>

         <h1><?php echo "{$name}'s Profile"; ?></h1>



    <?php

    // =====> POST
    //  ===> collect data from the HTML form (invisible)
    // if (isset($_POST)) {
    //     echo $_POST['name'] . ", Your form is submitted";
    // }
    // echo "<br>"; 
    // print_r($_POST);
    // 

 // <form action="post.php" method="post">
    // <input type="text" name="name">
    // <input type="text" name="age">
    // <button type="submit" > SUBMIT</button>

    // </form> -->
    ?>

   
    </body>
</html>
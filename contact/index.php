<!DOCTYPE html>
<html>
    <head>
        <title>Contact form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <h1>Get in touch</h1>
            <p>Please fill in the fields</p>
            <form action="contact.php" method="post">
                <input type="text" name="name" placeholder="Full name">
                <input type="email" name="email" placeholder="E-mail">
                <input type="text" name="subject" placeholder="Subject">

                <textarea name="message" placeholder="Enter message"></textarea>

                <button type="submit" name="submit">SEND E-MAIL</button>

                
            </form>
        </div>


 

    </body>
</html>
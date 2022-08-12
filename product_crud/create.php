<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', '');

// If the connection is not done
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';
// exit;

// FOR FILES UPLOADING

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// exit;

// echo $_SERVER['REQUEST_METHOD'] . '<br>';

$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$date = date('Y-m-d- H:i:s');


if(!$title) {
  $errors[] = 'Product title is required';


}

if(!$price) {
  $errors[] = 'Product price is required';

}

// if the directory does'nt exit
if(!is_dir('images')){
  // then create a image directory
  mkdir('images');

}



// if the error is empty which mean there is something inside the fields then, submit to the database [the block of code executes]
if (empty($errors)) {



// ! want to make like a random directory
$image = $_FILES['image'] ?? null;


// if the image is empty there should be an error
$imagePath = '';

if($image && $image['tmp_name']) {
  // where the images should be actually sent 
  // we are creating a uniqu path for that image, and the image path can be use in inserting image in the database.
    $imagePath = 'images/'.randomString(8) . '/' .$image['name'];


    // it returns where the file path is located
  mkdir(dirname($imagePath));


    // sepcifying where our uploaded image should be move to
  move_uploaded_file($image['tmp_name'], $imagePath);
}


// ! we are inserting in all the columns.
$statement =  $pdo->prepare("INSERT INTO products (title, image, description, price, created_date) VALUE(:title, :image, :description, :price, :date)");

// ===> [bindValue] means that we are telling pdo that the key and the values are for each others
$statement->bindValue(':title', $title);
$statement->bindValue(':image', '$imagePath'); 
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':date', $date);
$statement->execute();
// After submitting, redirect to
header('Location: index.php');
}


    }

    // function that can generate random strings so that we image uploaded can be specify for a unique products, we dont want the image to overwrite it each others when we upload them.
    function randomString($n){

      // ===> [$n] is passed as the length of the string
  
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

      $str = '';

      for($i = 0; $i < $n; $i++) {
        // calling rand function from 0 to the length of that string, the rand functionl accept the manimum and maximum, and generate invertal between them the minimum and the maximum, 
        // when you run it, it will pick from zero to the length of the string, then take character from  the characters base on the index
          $index = rand(0, strlen($characters)- 1);
          $str .= $characters[$index];

      }

      return $str;

    }


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>products CRUD</title>
  </head>
  <body>
    <h1>Create new Product</h1>


  <!-- if the error array is not empty that means there is somethng inside it so display the errors information -->

    <?php if (!empty($errors)): ?>


    <div class="alert alert-danger">

    <?php foreach ($errors as $error) : ?>

      <div> <?php echo $error ?> </div>

      <?php endforeach; ?>

    </div>


    <?php endif; ?>


    <form action="create.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>Product Image</label>
    <input type="file" name="image">
    <br>
  </div>
  <div class="form-group">
    <label>Product Title</label>
    <input type="text" name="title" class="form-control">
  </div>
  <div class="form-group">
    <label>Product Description</label>
    <textarea name="description" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>Product Price</label>
    <input type="number" step=".01" name="price" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




  </body>
</html>
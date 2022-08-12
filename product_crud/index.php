<?php
// ! This is use to connect to the database.
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', '');



// If the connection is not done
/**
 *
 **/
// * [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION] means that if the connection is not there it should throw the error connection.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// !===> making  query to the database and selecting all the products <===
// ! ===> To query something from the database in [pdo] you have to use [prepare] , you can use [exec] but [exec] is not recommended, you can only use it to make changes in the database [schema]  <===
// ! ===>   <===
// ===> order by [DESC] desending order
$statement = $pdo->prepare('SELECT * FROM products ORDER BY created_date DESC');


// this will make the query in the database
$statement->execute();

// ===> fetch as an associative array
$products =  $statement->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';

// var_dump($products);

// echo '/<pre>';
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
    <h1>products CRUD</h1>

    <p>
        <a href="create.php" class="btn btn-success">Create Product</a>
    </p>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Date Created</th>
      <th scope="col">Action</th>

      
    </tr>
  </thead>
  <tbody>
   
   
    <?php foreach ($products as $i => $product) { ?>
      <tr>
      <th scope="row"><?php echo $i + 1?></th>
      <td>
        <img src="<?php echo $product['image'] ?>" alt="img">
      </td>
      <td><?php echo $product['title'] ?></td>
      <td><?php echo $product['price'] ?></td>
      <td><?php echo $product['created_date'] ?></td>
      <td>
      <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
      <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
      </td>
    </tr>
  <?php  } ?>



  <!-- OR -->


<!-- 
  <?php foreach ($products as $product): ?>
        <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

  <?php  endforeach; ?> -
  
  ->

  </tbody>
</table>




  </body>
</html>
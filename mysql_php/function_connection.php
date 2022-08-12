<?php include "db.php";?>
<?php

// * this function is going to pull all the data from the users table.
function showalluserData() {
// * This means that you are inserting the values inside the columns that you have created in your database
$query = "SELECT * FROM  users";
// TODO: [global] You must make the connection global when doing this kind of thing.
// ! Remember anything inside the function is a local scope.
global $connection;
$result = mysqli_query($connection, $query);

if(!$result) {
    die('Query FAILED');
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option value = '$id'>$id</option>";
    }


}
?>
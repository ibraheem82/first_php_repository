<?php
$url = 'https://jsonplaceholder.typicode.com/users';

// ========> [CURL] gives you the opportunity to interact with other services or resources

// $resource =  curl_init($url);
// curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);


// $result = curl_exec($resource);
// // $info = curl_getinfo($resource);

// // GET THE REPONSE CALL THE [STATUS] = 200
// $code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
// echo $result;

// echo '<pre>';
// // var_dump($info);
// var_dump($code);

// echo '</pre>';



// Make a post request

$resource = curl_init();

$user = [
    'name' => 'Ibraheem Omikunle',
    'username' => 'ibraheem',
    'email' => 'ibraheemomikunle@gmail.com'
];

curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    // ===> TELLING THE API THAT THE CONTENT YOU SENDING IS JSON
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)

]);

$result = curl_exec($resource);

curl_close($resource);

echo $result;






?>
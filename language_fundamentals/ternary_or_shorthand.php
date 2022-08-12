<?php

$loggedIn = true;
$user = 'Ibraheem';

$arr = [1, 2, 3, 5, 6, 7, 8]

/*
if ($logged) {
    echo "You are logged in";
} else {
    echo "You are not logged in";
}
*/







// echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';


// $isRegistered = ($loggedIn == true) ? true : false;
// echo $isRegistered;


// $age = 20;
// $score = 15;

// ===>(1) if the score is greater than 10 then we are checking for the age and that also is greater than 10 then it is average, if the person is under 10 that is exceptional
// ===>(2) if the score is less than 10 and the age is greater than 10 it horrible and if under 10 it is average
// echo "Your score is: " . ($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'):($age > 10 ? 'Horrible':'Average'));
?>


<!-- <div>
    <?php if($loggedIn) { ?>
        <h1><?php echo "Welcome {$user}";?></h1>
        <?php } else { ?>
            <h1>Welsome Guest</h1>
            <?php } ?>
</div> -->


<!-- ===> OR -->

<!-- <div>
<?php if($loggedIn): ?>
    <h1>welcome User</h1>
    <?php else: ?>
        <h1>welcome Guest</h1>
    <?php endif; ?>
</div> -->


<!-- <div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>

    <?php endforeach; ?>
</div> -->




<div>
    <?php for($i = 0; $i < 21; $i++): ?>
        <li><?php echo $i; ?></li>

    <?php endfor; ?>
</div>


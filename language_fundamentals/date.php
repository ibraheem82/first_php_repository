<?php
    // echo date('d');  // Day
    // echo date('m');  // Month
    // echo date('Y');  // Year
    // echo date('l');     // Day of the week

    // echo date('Y/m/d');
    // echo date('m-d-y');


    // echo date('h'); //  hour
    // echo date('i'); //  minutes
    // echo date('s'); //  Seconds
    // echo date('a'); //  AM or PM



    // ===> Set Time Zone
    date_default_timezone_set('Africa/Lagos');
    // echo date('h:i:sa');

    /*
    Unix time is a system for describing a point in time. It is the number of seconds that have elapsed since the Unix epoch, excluding leap seconds. The Unix epoch is 00:00:00 UTC on 1 January 1970.

    */

    $timestamp = mktime(10, 24, 53, 5, 28, 2001);

    // echo $timestamp;

    // echo date('m/d/Y h:i:sa', $timestamp);

    // $timestamp2 = strtotime('7:00pm March 20 2020');
    // $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Monday');
    $timestamp5 = strtotime('+2 Months');
    $timestamp5 = strtotime('+2 Days');



    // echo $timestamp2;


    // echo date('m/d/Y h:i:sa', $timestamp5);

    echo phpinfo();




?>
<?php

echo date('d'); // Day

echo date('m'); // Month

echo date('y'); // Year

echo date ('l'); // Day of the week

echo date('d/m/Y');

echo date('h'); // Hour

echo date('i'); // Min

echo date('s'); // Sec

echo date('a'); // AM or PM

 // Set time zone
 date_default_timezone_set('Europe/Amsterdam');
echo date('h:i:sa');

// Timestamp is a long integer containing the number of seconds between the Unix Epoch and the specified time
$timestamp = mktime(10,14,54,1,14,1992);
echo $timestamp;

// Create date from timestamp
echo date('m/d/Y h:i:sa', $timestamp);

// String to time
$timestamp = strtotime('8:00 march 14 1992');
$timestamp = strtotime('+2 months');
echo date('m/d/Y h:i:sa', $timestamp);
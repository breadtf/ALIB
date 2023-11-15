<?php

// 
// ALIB tests
// 

// Include and define alib
require("alib.php");
$ALIB = new alib();

// Define a variable for keeping track of how many tests didnt pass
// If this is higher than 0, fail
$testsFailed = 0;

// 
// Test 1
// Appending json data
// 

$array = array(
    "key1" => "value1",
    "key2" => "value2"
);

// Write some dummy data for testing.
// TODO: Hacky fix to add square brackets at the start and end of the dummy data, find
//       a better fix for this if possible.

file_put_contents("dummy.json", "[\n\n" . json_encode($array, JSON_PRETTY_PRINT) . "\n\n]");

if ($ALIB->appendJSON($array, "dummy.json")){
    // Pass
    echo "Pretty json append \033[32mPASS\033[0m\n";
} else{
    // Fail
    echo "Pretty json append \033[31mFAIL\033[0m\n";
    $testsFailed += 1;
}
if ($ALIB->appendJSON($array, "dummy.json", false)){
    // Pass
    echo "Minimal json append \033[32mPASS\033[0m\n";
} else{
    // Fail
    echo "Minimal json append \033[31mFAIL\033[0m\n";
    $testsFailed += 1;
}
// Done testing JSON functions, remove dummy data as we are done with it.
unlink("dummy.json");

// 
// Test 2
// Getting JSON data
// 
if ($ALIB->getJSONAndDecode("test/getjson-test.json")[0]["key1"] == "value1"){
    echo "Get JSON and Decode \033[32mPASS\033[0m\n";
} else{
    // Fail
    echo "Get JSON and Decode \033[31mFAIL\033[0m\n";
    $testsFailed += 1;
}

//
// Test 3
// Tag formatting test
// 

if ($ALIB->formatInTag("Sample text", "p") == "<p>Sample text</p>"){
    echo "Tag Format \033[32mPASS\033[0m\n";
} else{
    // Fail
    echo "Tag Format \033[31mFAIL\033[0m\n";
    $testsFailed += 1;
}

// 
// Testing finished, check results and alert if tests failed.
// 
if ($testsFailed == 0){
    echo "\033[32mAll tests passed!\033[0m\n";
} else{
    echo "\033[31m" . $testsFailed . " tests failed.\033[0m\n";
}
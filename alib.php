<?php

// 
// ALIB - ALib Isnt Bad
// Multipurpose PHP Library
// ALIB is liscenced under MIT
// https://github.com/breadteleporter/alib
// 

class alib {

    const version = "0.0.2";

    // Append JSON data to a file
    function appendJSON($array, $file, $pretty=true){
        try{
            $tempArray = json_decode(file_get_contents($file));
            array_push($tempArray, $array);
            if ($pretty == false){$jsonData = json_encode($tempArray);}
            if ($pretty == true){$jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);}
            file_put_contents($file, $jsonData);
            return true;
        } catch(Exception $e){
            throw new Exception($e);
            return false;
        }
    }

    // Format a string into a tag
    function formatInTag($string, $tag){
        return "<" . $tag . ">" . $string . "</" . $tag . ">";
    }

    // Append a newline to a string
    function formatWithNewline($string){
        return $string . "\n";
    }

    // Append a HTML Linebreak to a string
    function formatWithLinebreak($string){
        return $string . "<br>";
    }

    // Get JSON data from a remote server or file
    function getJSONAndDecode($location){
        return json_decode(file_get_contents($location), true);
    }

    // Upload a file into a directory
    function uploadToDir($file, $directory){
        $uploadfile = $directory . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
            return true;
        } else {
            return false;
        }
    }
}
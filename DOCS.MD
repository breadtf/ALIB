## appendJSON

Usage: `$ALIB->appendJSON(Array: $array, String: $file, Bool: $pretty)`

Append JSON data to a file.

$array: Array to append encode and write to $file.

$file: File to write to.

$pretty: (Optional, default `true`) Use JSON_PRETTY_PRINT when encoding.



## formatInTag


Usage: `$ALIB->formatInTag(String: $string, String: $tag)`
Format a string into an element/tag.



$string: String to format.

$tag: Tag to use (p, h1, a, etc.)



## formatWithNewline

Usage: `$ALIB->formatWithNewline(String: $string)`

Append a newline `\n` to a string.



$string: String to append to.



## formatWithLinebreak

Usage: `$ALIB->formatWithNewline(String: $string)`

Append an HTML linebreak `<br>` to a string.



$string: String to append to.



## getJSONAndDecode

Usage: `$ALIB->getJSONAndDecode(String: $location)`

Get JSON data from a remote server / file and decode.



$location: Location of data.



## uploadToDir

Usage: `$ALIB->uploadToDir(Array: $file, String: $directory)`

Use $_FILES to upload a file to the specified directory.



$file: $_FILES sub-array (eg: `$_FILES["myfile"]`)

$directory: Directory to upload to
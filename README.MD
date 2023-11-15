# ALIB, A multipurpose PHP Library
ALIB is a PHP library designed to make using PHP easier and faster.

### ⚠️ WARNING
ALIB is currently pre-pre-pre-pre alpha and is definetly not production ready. Use at your own risk.

ALIB includes many common functions often used by PHP programmers, such as
a JSON append function, and a tag formatting function.

## Installation
Go to the releases page and get the latest version of `alib.php`
then, drop the file into your library folder (most commonly called `lib`)
To include ALIB onto a page, insert this code:
```
<?php
require("lib/alib.php");
$ALIB = new alib();
?>
```

## Usage
Using the tag formatting function as an example, to use an ALIB function,
insert this code into your PHP script:
`$ALIB->formatInTag("Sample text", "p")`
This will place the string "Sample text" into a paragraph tag.

To echo this to the document, simply add:
`echo $ALIB->formatInTag("Sample text", "p")`

## Contributing
All contributions are welcome in ALIB, feel free to add anything you feel
could be useful.

All PRs are required to pass testing, see below for steps on how to do this.

(Note: When writing new functions, please modify tests.php to include a new test for your function)

## Testing
Run `php tests.php` in your terminal to test ALIB

(Note: It is required to paste the output of the above command when creating a PR)
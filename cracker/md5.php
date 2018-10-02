<?php
$error = false;
$md5 = false;
$code = "";
if ( isset($_GET['encode']) ) {	 
    $code = $_GET['encode'];
    if (strlen($code) != 4 ) {
        $error = "Input must be a 4 digit long number";           
    } elseif ($code < '0' || $code > '9999' ) {
        $error = "Input must be numbers between 0 and 9999";           
    } else {
        $md5 = hash('md5', $code);
    }
}
?>
<!DOCTYPE html>
<head><title>Uwem Uke's MD5</title></head>
<body>
<h1>MD5 Maker</h1>
<?php
if ( $error !== false ) {
    print '<p style="color:red">';
    print htmlentities($error);
    print "</p>\n";
}

if ( $md5 !== false ) {
    print "<p>MD5 value: ".htmlentities($md5)."</p>";
}
//<p>MD5: <?= print htmlentities($md5); 
?>
<p>Please enter a 4 digit number for encoding.</p>
<form>
<input type="text" name="encode" size="40" />
<input type="submit" value="Compute MD5"/>
</form>
<p><a href="md5.php">Reset</a></p>
<p><a href="index1.php">Back to Cracking</a></p>
</body>
</html>

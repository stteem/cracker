<!DOCTYPE html>
<head><title>Uwem Uke MD5 Cracker</title></head>
<body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash
of a 4-digit string and 
attempts to hash all 4 digits combinations
to determine the original four numbers.</p>
<pre>
Debug Output:
<?php
$goodtext = "Not found";



if (isset($_GET['md5'])) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    $show1 = 15;


    for ($i=0; $i<=9; $i++) { 
        for ($j=0; $j<=9; $j++) { 
            for ($k=0; $k<=9; $k++) { 
                for ($l=0; $l<=9; $l++) {

                    $try1 = $i.$j.$k.$l;
        
                    $check1 = hash('md5', $try1);
                    if ($check1 == $md5) {
                    $goodtext = $try1;
                    break;
                    }
                    if ( $show1 > 0 ) {
                        print "$check1 $try1\n";
                        $show1 = $show1 - 1;
                    }
                }
            }   
        }
    }

    // Compute ellapsed time
    $time_post = microtime(true);
    print "Ellapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}

?>
</pre>
<!-- Use the very short syntax and call htmlentities() -->
<p>Original Text: <?= htmlentities($goodtext); ?></p>
<form>
<input type="text" name="md5" size="60" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index1.php">Reset</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<li><a href="makecode1.php">MD5 Code Maker</a></li>
<li><a
href="https://github.com/csev/wa4e/tree/master/code/crack"
target="_blank">Source code for this application</a></li>
</ul>
</body>
</html>


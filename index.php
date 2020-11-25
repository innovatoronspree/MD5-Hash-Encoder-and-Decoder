<!DOCTYPE html>
<head><title>Charles Severance MD5 Cracker</title></head>
<body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
<pre>
Debug Output:
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    // This is our alphabet
   
    $show = 15;


    
        for($i=0;$i<10;$i++)
        {   
           
            for($j=0;$j<10;$j++)
            {   
                
                for($k=0;$k<10;$k++)
                {   
                    
                    for($l=0;$l<10;$l++)
                    {   
                        
                        
                        $try = $i.$j.$k.$l;
                        $check = hash('md5',$try);
                        //print "$try \n";
                        if($check == $md5)
                        {   
                            //print "$try \n";
                            $goodtext = $try;
                            break;
                        }
                       if($show > 0)
                        {
                            print "$check $try\n";
                            $show--; 
                        } 
                    }
                }
            }
        }
    
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
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
<li><a href="index.php">Reset</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<li><a href="makecode.php">MD5 Code Maker</a></li>
<li><a
href="https://github.com/csev/wa4e/tree/master/code/crack"
target="_blank">Source code for this application</a></li>
</ul>
</body>
</html>


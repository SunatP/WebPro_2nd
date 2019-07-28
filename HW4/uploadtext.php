<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<?php


//

$fp = fopen($_FILES['file']['tmp_name'], 'rb');
$line = fgets($fp);

      echo "$line</br>";
 //explode() to split the sentence
    //   print_r(explode(',',$line,3))."</br>";

         print_r(explode('.',$line,3))."</br>";
        echo "</br>  Total word is "." " . strlen($line)."<br>";

        function strposa($haystack, $needle, $offset=0) {
            if(!is_array($needle)) $needle = array($needle);
            foreach($needle as $query) {
                //strpos is find the word function and then found it will return result
                if(strpos($haystack, $query, $offset) !== false) 
                {
                    
                    echo " Return word to find is ";
                    return true;
                } // stop on first true result
            }
            return false;
        }
        $string = $line;
        $array  = array('COCO','yolo');
        var_dump(strposa($string, $array)); // will return true, since "cheese" has been found



        echo "<br> "."Full sentence is <br>";
    while ( ($line = fgets($fp)) !== false) {
      echo "$line<br>";
    }
    echo ("Hello world!"). "<br>";

    echo "Reverse word is " .strrev("Hello world!"); // outputs !dlrow olleH
 
    unset($_SESSION['upload-text.php']); 
    session_destroy(); 
 ?>
    </head>
    </html>
<?php
//reading from file
// creating pointer for file
$fptr = fopen("myfile.txt","r");
if(!$fptr){
    die("failed to open the file");
}

// fetching content
$content = fread($fptr , filesize("myfile.txt"));
echo $content;

fclose($fptr);

$fptrr = fopen("myfile2.txt" , "w");
fwrite($fptrr,"this is the new content of the file");
fwrite($fptrr,"this is the another of the file");
fwrite($fptrr,"this is last of the file");

fclose($fptrr);

?>





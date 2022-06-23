<?php
// echo readfile("file2.txt");
$file="ETHICAL.txt";
if(file_exists($file))
{
    echo readfile("ETHICAL.txt");
    rename("ETHICAL.txt","new2.txt");
}
    else{
    echo "file does not exist";
}
?>
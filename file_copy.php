<?php
$file="new2.txt";
if(file_exists($file))
{
    echo readfile("new2.txt");
    copy($file,"hi.txt");
}
    else{
    echo "file does not exist";
}
?>
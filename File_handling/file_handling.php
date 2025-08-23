<?php
function write($id,$name,$salary,$address) {

    if(file_exists("users.txt")){
        $data ="$id |$name| $salary|$address" ;
        file_put_contents("users.txt",$data);
    }
    else {
        echo "File not found";
    }
}

// write(1,"stro",56000,"MuMBAI");

$filename = "users.txt";
function read($filename){
    if(file_exists($filename)){
        $data = file_get_contents($filename);
        echo nl2br($data);
    }
}


function append($id,$name,$salary,$address) {

    if(file_exists("users.txt")){
        $data ="$id |$name| $salary|$address" ;
        file_put_contents("users.txt",$data,FILE_APPEND);
    }
    else {
        echo "File not found";
    }
}

// append(2,"Sagar",45643,"Dahisar");
function delete($filename) {

    if(file_exists("users.txt")){
        unlink($filename);
    }
    else {
        echo "File not found";
    }
}


// read($filename);

delete($filename);

?>
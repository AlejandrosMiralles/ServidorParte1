<?php 
    header('Content-Type: application/zip');

    header('Content-Length: 2400000');

    header('Content-Disposition: attachment; filename="download.zip"');

    for($i=0; 1024 > $i; ++$i){
        echo str_repeat("." , 1024);
    
        usleep(50000);
    }

?>
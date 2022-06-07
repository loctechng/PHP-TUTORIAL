<?php
    // File System

    // $text = readfile('readmee.txt');
    // echo $text;

    $file = 'readme.txt';

    if ( file_exists($file)  ) {
        // echo 'File exist';
        
        // Read a fille
        echo readfile($file);

        //Copy file
        copy( $file , 'duplicate.txt');
        // echo readfile('duplicate.txt');

        // Renaming file
        rename( 'duplicate.txt', 'test.txt'  );

        // File Size
        echo '<br>' . filesize( $file );

        // Absolute path
        echo '<br>' . realpath($file);

        // To make a directory(folder)
        mkdir('New Folder');
    
    } else {
        echo 'File does not exist';
    }


?>
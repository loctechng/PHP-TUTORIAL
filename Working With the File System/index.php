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
        // echo 'File does not exist';
    }

    // File System 2
    // Handling Files on the system with php
    $_file = 'test.txt';

    // opening a file for reading
    $handleFile = fopen($_file, 'a+' );

    // read the file
    // echo fread( $handleFile, filesize($_file)  );
    // echo fread( $handleFile, 5 );

    // read a single line
    // echo fgets($handleFile);

    // read a single character
    echo fgetc($handleFile);

    // writing to a file with php
    fwrite($handleFile, "\nEverything is going well!");

    fclose($handleFile);

    // unlink($_file);

?>
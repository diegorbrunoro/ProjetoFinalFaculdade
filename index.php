<?php


$status = @shell_exec('svnversion '.realpath(__FILE__));
if ( preg_match('/\d+/', $status, $match) ) {
    echo 'Revision: '.$match[0];
}


$directory = ".";

// Open a directory, and read its contents
if (is_dir($directory)){
  if ($opendirectory = opendir($directory)){
    while (($file = readdir($opendirectory)) !== false){
      #echo "filename:" . $file . "<br>";
	  echo "<a href=" . $file . ">" . $file . "</a><br>";
    }
    closedir($opendirectory);
  }
}
?>

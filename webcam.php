<?php
  
$filename = (string) date('Y-m-d__H-i-s').".jpg";
//print $filename."\n";
shell_exec("raspistill -vf -hf -w 640 -h 480 -q 60 -o /home/pi/webcam/pics/".$filename);

shell_exec("curl -u <username>:<password> -T /home/pi/webcam/pics/".$filename." ftp://<<ftp.ftpsite.com");


?>

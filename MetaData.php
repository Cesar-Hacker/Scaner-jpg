<!--
   Informasion del
     _ ____   ____
    | |  _ \ / ___|
 _  | | |_) | |  _
| |_| |  __/| |_| |  _   _   _
 \___/|_|    \____| ( ) ( ) ( ) Cesar Hacker The Gray
                                                                                           
-->
<h1>Standard Data</h1>
<?php
$exif = exif_read_data('Gray.jpg', 'IFD0');
echo $exif===false ? "[w] Gray : No header data found.<br />\n" : "Image contains headers<br /><br />";

$exif = exif_read_data('Gray.jpg', 0, true);
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}
?>
<br><br>
<h1>Print All Information</h1>
<?php
function arrayPrettyPrint($exif, $level) {
    foreach($exif as $k => $v) {
        for($i = 0; $i < $level; $i++)
            echo("&nbsp;");  
        if(!is_array($v))
            echo("<b>".$k ."</b> => " . $v . "<br/>");
        else {
            echo("<br><b>".$k . "</b> => <br/>");
            arrayPrettyPrint($v, $level+1);
        }
    }
}
arrayPrettyPrint($exif, 0);
?>

<!--
 ____                                  _ ____   ____
/ ___|  ___ __ _ _ __   ___ _ __      | |  _ \ / ___|
\___ \ / __/ _` | '_ \ / _ \ '__|  _  | | |_) | |  _
 ___) | (_| (_| | | | |  __/ |    | |_| |  __/| |_| |
|____/ \___\__,_|_| |_|\___|_|     \___/|_|    \____|
-->


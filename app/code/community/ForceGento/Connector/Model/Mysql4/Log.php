<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
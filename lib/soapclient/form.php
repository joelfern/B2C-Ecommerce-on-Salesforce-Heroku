<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
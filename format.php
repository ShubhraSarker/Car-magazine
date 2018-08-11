<?php
class format{
	function textshorten($str,$limit){
           $text=substr($str,0,$limit);
           $text=$text.'......';
           return $text;
	}
}
?>
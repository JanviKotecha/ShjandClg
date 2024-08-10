<?php
	function getNowDt() {
		return date("Y-m-d H:i:s");
	}
	
	function getCusDt($frmt = "Y-m-d H:i:s") {
		return date($frmt);
	}

	function chkDbDt($nDt,$frmt = "",$rtnVal = "") {
		if($nDt==NULL)
			return $rtnVal;
		else if($nDt == '0000-00-00 00:00:00')
			return $rtnVal;
		else if($nDt == '0000-00-00')
			return $rtnVal;
		else if($nDt == '1970-01-01')
			return $rtnVal;
		else {
			if($frmt != "")
				return date($frmt,strtotime($nDt));
			else
				return $nDt;
		}
	}
	function sernum() {
		$template   = 'XX999X';
		$k = strlen($template);
		$sernum = '';
		for ($i=0; $i<$k; $i++) {
			switch($template[$i]) {
				case 'X': $sernum .= chr(rand(65,90)); break;
				case '9': $sernum .= rand(0,9); break;
			}
		}
		return $sernum;
  	}
?>
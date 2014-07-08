<?php 
date_default_timezone_set('America/New_York');


function myFunction()
{
	$returnArray = Array('',4,'off','off','off');
	$OutputPassword='';
	$caseFlag = 'off';
	$WordArray = file("WordFile.txt");
	$WordCnt = 0;
	$numFlag = 'off';
	$symFlag = 'off';

	foreach ($_GET as $key => $value) {
		if($key=="WordCount")
		{
			$returnArray[1] = $value;
			$WordCnt = $value;
		}
		else if ($key=="NumberFlag") {
			$returnArray[2] = $value;
			$numFlag = $value;
		}
		else if ($key=="SymbolFlag") {
			$returnArray[3] = $value;
			$symFlag = $value;
		}
		else if ($key=="UpperCaseFlag") {
			$returnArray[4] = $value;
			$caseFlag = $value;
		}
	}

	for($i=0; $i<$WordCnt; ++$i)
	{
		$currRandNum = rand(0,4999);
		$result = $WordArray[$currRandNum];
		if($i==0 && $caseFlag == 'on')
		{
			$firstChar = $result[0];
			$result[0] = chr(ord($firstChar)-32);
		}

		$result = substr($result,0,(strlen($result)-2));
		$OutputPassword .= $result;
		if($i<($WordCnt-1))
			$OutputPassword.='-';
	}


	if($symFlag == 'on')
	{
		//$OutputPassword.='-';
		$symNum = rand(1,32);
		if($symNum<16)
			$OutputPassword.=chr(32+$symNum);
		else if($symNum<23)
			$OutputPassword.=chr(42+$symNum);
		else if($symNum<29)
			$OutputPassword.=chr(68+$symNum);
		else
			$OutputPassword.=chr(94+$symNum);
	}

	if($numFlag=='on')
	{
		//$OutputPassword.='-';
		$Num = rand(0,9);
		$OutputPassword .= $Num;
	}

	$returnArray[0] = $OutputPassword;
	return $returnArray;
}

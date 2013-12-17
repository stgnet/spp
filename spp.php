<?php

function spp($line=null) {
	$stamp=microtime(true);
	if (!empty($GLOBALS['proflast'])) {
		$last=$GLOBALS['proflast'];
		$elapsed=$stamp-$GLOBALS['proftime'];
		if (!array_key_exists($last,$GLOBALS['profdata']))
			$GLOBALS['profdata'][$last]=$elapsed;
		else
			$GLOBALS['profdata'][$last]+=$elapsed;
	}

	$GLOBALS['proftime']=$stamp;
	$GLOBALS['proflast']=$line;
	if (!$line)
	{
		asort($GLOBALS['profdata']);
		foreach ($GLOBALS['profdata'] as $line => $total)
			echo $line.' '.number_format($total,5)."\n";
		$GLOBALS['profdata']=array();
	}
}

<?php
	require_once '../_lib/class.Stats.php';
	$stats = new Stats();
	$smarty->assign('applications', $stats->Applications());
	$smarty->assign('keywordz', $stats->Keywords());
	$smarty->assign('current_category', 'stats');
	$template = 'stats.tpl';
?>
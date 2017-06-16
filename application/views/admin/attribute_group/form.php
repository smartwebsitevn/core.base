<?php
$_macro = $this->data;

/* Tabs links */
$_macro['toolbar_sub'] = $this->_toolbar;


/* Truyền dữ liệu cho form */
$info = isset($info) ? (array)$info : null;
$_macro['form']['data'] = $info;

/* Name is required */
$_macro['form']['rows'][] = array(
	'param' => 'name',
	'req' 	=> true,
);



$_macro['form']['rows'][] = array(
	'param' => 'sort',
	'value' => $info['sort'],
	'type' => 'spinner'
);

/* Hide this record */
$_macro['form']['rows'][] = array(
	'param' 	=> 'show',
	'name'		=> lang('status'),
	'type' 		=> 'bool_status',
	'value'		=> (isset($info['show']) ? $info['show'] : 1)
);

echo macro('mr::advForm')->page($_macro);
?>


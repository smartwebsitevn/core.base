<?php
class Email_register_model extends MY_Model {
	
	var $table = 'email_register';
	
/*
 * ------------------------------------------------------
 *  Main handle
 * ------------------------------------------------------
 */
	/**
	 * Filter handle
	 */
	function _filter_get_where(array $filter)
	{
		$where = parent::_filter_get_where($filter);
		
		foreach (array('id', 'created') as $p)
		{
			$f = (in_array($p, array())) ? $p.'_id' : $p;
			$f = $this->table.'.'.$f;
			$m = (in_array($p, array('created'))) ? 'range' : '';
			$this->_filter_set_where($filter, $p, $f, $where, $m);
		}
		
		foreach (array('email',) as $p)
		{
			if (isset($filter[$p]))
			{
				$this->search($this->table, $p, $filter[$p]);
			}
		}
		

		
		return $where;
	}
	
	/**
	 * Tao filter tu input
	 */
	function filter_create($fields, &$input = array())
	{
		// Lay config
		$verify = config('verify', 'main');
		
		// Lay gia tri cua filter dau vao
		$input = array();
		foreach ($fields as $f)
		{
			$v = $this->input->get($f);
			$v = security_handle_input($v, in_array($f, array()));
			
	
			$input[$f] = $v;
		}
		
		if ( ! empty($input['id']))
		{
			foreach ($input as $f => $v)
			{
				$input[$f] = ($f != 'id') ? '' : $v;
			}
		}
		
		// Tao bien filter
		$filter = array();
		$query 	= url_build_query($input, TRUE);
		foreach ($query as $f => $v)
		{
			switch ($f)
			{
		
				case 'created':
				{
					$created_to = $input['created_to'];
					$v = (strlen($created_to)) ? array($v, $created_to) : $v;
					$v = get_time_between($v);
					$v = ( ! $v) ? NULL : $v;
					break;
				}
			}
			
			if ($v === NULL) continue;
			
			$filter[$f] = $v;
		}
		
		return $filter;
	}
	
	/**
	 * Tim kiem du lieu
	 */
	function _search($field, $key)
	{
		switch ($field)
		{
			case 'name':
				{
				$this->db->like($this->table.'.'.$field, $key);
				break;
			}
		}
	}
}
?>
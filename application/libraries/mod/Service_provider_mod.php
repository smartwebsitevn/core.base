<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_provider_mod extends MY_Mod
{
	/**
	 * Them cac thong tin phu
	 *
	 * @param object $row
	 * @return object
	 */
	public function add_info($row)
	{
		if (isset($row->image_name))
		{
			t('load')->helper('file');
			$row->image = file_get_image_from_name($row->image_name, public_url('img/no_image.png'));
		}
	
		return $row;
	}
	
}
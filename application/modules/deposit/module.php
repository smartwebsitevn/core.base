<?php namespace Modules\Deposit;

use App\Currency\CurrencyFactory;

class Module extends \MY_Module
{
	public $key = 'deposit';

	/**
	 * Lay setting cua module
	 *
	 * @return array
	 */
	public function setting_get_config()
	{
		$config = parent::setting_get_config();

		$this->setting_set_config_currency($config);

		return $config;
	}

	/**
	 * Gan config currency
	 *
	 * @param array $config
	 */
	protected function setting_set_config_currency(array &$config)
	{
		$currency = CurrencyFactory::currency()->getDefault()->code;

		$params = ['amount_min', 'amount_max'];

		foreach ($params as $param)
		{
			$config[$param]['name'] .= " ({$currency})";
		}
	}

}

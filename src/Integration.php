<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouwV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id         = 'abnamro-ideal-zelfbouw-v3';
		$this->name       = 'ABN AMRO - iDEAL Zelfbouw - v3';
		$this->url        = 'https://abnamro.ideal-payment.de/';
		$this->provider   = 'abnamro';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouwV3_ConfigFactory';
	}
}

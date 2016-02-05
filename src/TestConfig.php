<?php

/**
 * Title: ABN AMRO iDEAL Zelfbouw v3 config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouwV3_TestConfig extends Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouwV3_Config {
	public function get_payment_server_url() {
		return 'https://abnamro.ideal-payment.de/ideal/iDEALv3';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/abnamro.cer',
		);
	}
}

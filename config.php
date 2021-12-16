<?php

/**
 * OpenPayU Examples
 *
 * @copyright  Copyright (c) 2011-2016 PayU
 * @license    http://opensource.org/licenses/LGPL-3.0  Open Software License (LGPL 3.0)
 * http://www.payu.com
 * http://developers.payu.com
 */

//set Environment
OpenPayU_Configuration::setEnvironment('sandbox');

//set POS ID and Second MD5 Key (from merchant admin panel)
OpenPayU_Configuration::setMerchantPosId('360432'); // POS ID (pos_id) / OAuth protocol - client_id
OpenPayU_Configuration::setSignatureKey('3d274dc1629e01d7467a9be3833243ab'); // Second key (MD5)

//set Oauth Client Id and Oauth Client Secret (from merchant admin panel)
OpenPayU_Configuration::setOauthClientId('360432'); // OAuth protocol - client_id / POS ID (pos_id)
OpenPayU_Configuration::setOauthClientSecret('41664ab0f549619fa99ddc18809d090c'); // Key (MD5) / OAuth protocol - client_secret 

/* path for example files*/
$dir = explode(basename(dirname(__FILE__)) . '/', $_SERVER['SCRIPT_NAME']);
$directory = $dir[0] . basename(dirname(__FILE__));
$url = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $dir[0];

define('HOME_DIR', $url);
define('EXAMPLES_DIR', HOME_DIR . 'examples/');
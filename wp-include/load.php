<?php
/**
 * [pdm] (C)2014 markdream Inc.
 *
 * $Id: load.php  2014-10-24 下午12:03:43 pony_chiang $
 */

defined ( 'PDM_URL' ) or exit ( 'Access Denied' );

require PDM_PATH . '/wp-config.php';

//system variables
define ( 'PDM_CONTENT_PATH', PDM_PATH . '/wp-content/' );
define ( 'PDM_INC_PATH', PDM_PATH . '/wp-include/' );
//templates variables

define ( 'PDM_CONTENT_URL', PDM_URL . 'wp-content/' );

//change the framework default options
define ( 'APP_PATH', PDM_PATH . '/application/' );
define ( 'VENDOR_PATH', PDM_INC_PATH . '/ThirdParty/' );
define ( 'RUNTIME_PATH', PDM_PATH . '/tmp/' );

require PDM_PATH . '/wp-include/ThinkPHP/ThinkPHP.php';

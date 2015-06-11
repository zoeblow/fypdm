<?php
/**
 * [pdm] (C)2014 markdream Inc.
 *
 * $Id: index.php 2014-10-24 下午12:01:57 pony_chiang $
 */
define ( 'APP_DEBUG', 0 );
define ( 'PDM_URL', 'http://127.0.0.1/pdm/' );//修改成自己的主页地址。细节请看README.md
define ( 'PDM_PATH', dirname ( __FILE__ ) );
define ( 'PDM_SHOWTRACE', 0 );
define ( 'PDM_VERSION', 'v2.0.150111' );
define ( 'PDM_ERROR', '请求错误！' );
define ( 'PDM_NAME', '密码管理系统' );
define ( 'PDM_COPYRIGHT', 'markdream' );
define ( 'PDM_LIMIT', 10 );

// 允许删除过期密码天数
define ( 'PDM_ALLOW_DELETE_DAY', 7 );

// 加密字符
define ( 'PDM_MAIN_CODE', 'markdream' );

// 邮件设置
define ( 'PDM_STMP', 1 );
define ( 'PDM_STMP_HOST', 'smtp.163.com' );
define ( 'PDM_STMP_PORT', 25 );
define ( 'PDM_STMP_USER', 'mail@163.com' );//修改成自己的email
define ( 'PDM_STMP_PASSWORD', '123456' );//修改成自己的密码

require './wp-include/load.php';

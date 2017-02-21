<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '101.201.65.237', // 服务器地址
	'DB_NAME'               =>  'damu',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  '123456',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  '',    // 数据库表前缀
	'DB_CHARSET'            =>  'utf8',      // 数据库编码
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	
	//密钥
	'AU_KEY' => 'dxun6286',
	
//	'TMPL_EXCEPTION_FILE'=>'./Public/error.html',
		
	/* 模板相关配置 */
	'TMPL_PARSE_STRING' => array(
			'__PUBLIC__'         => SCRIPT_DIR . '/Public',
			'__STATIC__'         => SCRIPT_DIR . '/Public/static'
	),
		
	'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名配置
	'APP_SUB_DOMAIN_RULES'    =>    array( 
			'bwhb.poo168.cn'  => 'Home2',  // admin.domain1.com域名指向Admin模块   
	        'fa.c1788.cn'  => 'Home3',  // admin.domain1.com域名指向Admin模块
	),
		
);
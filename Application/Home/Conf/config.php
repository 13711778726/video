<?php
return array(
	//'配置项'=>'配置值'
		/* 'REDIS_HOST'=>'192.168.0.2',
		'REDIS_PORT'=>6379,
		'REDIS_AUTH'=>123456,
		'REDIS_DB_PREFIX'=>'', */
		'TMPL_PARSE_STRING' => array(
				'__IMG__'    => SCRIPT_DIR . '/Public/static/Home/img', //图片目录
				'__CSS__'    => SCRIPT_DIR . '/Public/static/Home/css', //CSS目录
				'__JS__'     => SCRIPT_DIR . '/Public/static/Home/js', //JS目录
				'__UPLOAD__' => SCRIPT_DIR . '/Public/upload/Home/', //上传文件地址
				'__PIC__' => SCRIPT_DIR . '/Public/static/Home/pic' //上传文件地址
		),
);
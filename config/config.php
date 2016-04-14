<?php

//  ss-panel v3 配置
//
// !!! 修改此key为随机字符串确保网站安全 !!!
$System_Config['key'] = '';
$System_Config['debug'] =  'false';  //  正式环境请确保为false
$System_Config['appName'] = '';             //站点名称
$System_Config['baseUrl'] = 'https://zhaojin97.cn';            // 站点地址
$System_Config['timeZone'] = 'PRC';        // RPC 天朝时间  UTC 格林时间
$System_Config['pwdMethod'] = 'sha256';       // 密码加密   可选 md5,sha256
$System_Config['salt'] = '';               // 密码加密用，从旧版升级请留空
$System_Config['theme']    = 'default';   // 主题
$System_Config['authDriver'] = 'cookie';   // 登录验证存储方式,推荐使用Redis   可选: cookie,redis
$System_Config['sessionDriver'] = 'cookie';
$System_Config['cacheDriver'] = 'cookie';
$System_Config['tokenDriver'] = 'db';

$System_Config['version'] = '3.2 glzjin mod-20160414180900';

// mu key 用于校验ss-go mu的请求,半角逗号分隔
$System_Config['muKey'] = '';
// 邮件
$System_Config['mailDriver'] = 'mailgun';   // mailgun or smtp

// 用户签到设置
$System_Config['checkinTime'] = '24';      // 签到间隔时间 单位小时
$System_Config['checkinMin'] = '1989';       // 签到最少流量 单位MB
$System_Config['checkinMax'] = '8964';       // 签到最多流量

//
$System_Config['defaultTraffic'] = '100';      // 用户初始流量 单位GB

// 注册后获得的邀请码数量
$System_Config['inviteNum'] = '0';

# database 数据库配置
$System_Config['db_driver'] = 'mysql';
$System_Config['db_host'] = 'localhost';
$System_Config['db_database'] = '';
$System_Config['db_username'] = '';
$System_Config['db_password'] = '';
$System_Config['db_charset'] = 'utf8';
$System_Config['db_collation'] = 'utf8_general_ci';
$System_Config['db_prefix'] = '';

# redis
$System_Config['redis_scheme'] = 'tcp';
$System_Config['redis_host'] = '127.0.0.1';
$System_Config['redis_port'] = '6379';
$System_Config['redis_database'] = '0';
$System_Config['redis_password']="";

# mailgun
$System_Config['mailgun_key'] = '';
$System_Config['mailgun_domain'] = '';
$System_Config['mailgun_sender'] = '';

# smtp
$System_Config['smtp_host'] = '';
$System_Config['smtp_username'] = '';
$System_Config['smtp_port'] = '25';
$System_Config['smtp_name'] = '';
$System_Config['smtp_sender'] = '';
$System_Config['smtp_passsword'] = '';
$System_Config['smtp_ssl'] = 'false';

# aws
$System_Config['aws_access_key_id'] = '';
$System_Config['aws_secret_access_key'] = '';


#glzjin's time

#用户过期时间，在注册时设置。（天）
$System_Config['user_expire_in_default']='99999';

#Radius数据库设置
$System_Config['radius_db_host']='';
$System_Config['radius_db_database']='';
$System_Config['radius_db_user']='';
$System_Config['radius_db_password']='';

#Radius连接密钥
$System_Config['radius_secret']='';


#DirectAdmin 邮件列表设置
$System_Config['da_host']='';
$System_Config['da_port']='';
$System_Config['da_username']='';
$System_Config['da_password']='';
$System_Config['da_domain']='';
$System_Config['da_listname']='';


#多说设置
$System_Config['duoshuo_shortname']="";
$System_Config['duoshuo_apptoken']="";


#节点离线设置
$System_Config['node_offline_warn']='true';

#异地登陆提示
$System_Config['login_warn']='true';

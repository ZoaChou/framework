<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: luofei614 <weibo.com/luofei614>
// +----------------------------------------------------------------------

/**
 * ThinkPHP SAE应用模式定义文件
 */
return [
    // 命名空间
    'namespace' => [
        'think'       => LIB_PATH . 'think' . DS,
        'behavior'    => LIB_PATH . 'behavior' . DS,
        'traits'      => LIB_PATH . 'traits' . DS,
        APP_NAMESPACE => APP_PATH,
    ],

    // 配置文件
    'config'    => array_merge(include THINK_PATH . 'convention' . EXT, [
        /* 数据库设置 */
        'database'         => [
            // 数据库类型
            'type'        => 'mysql',
            'dsn'         => '', //
            // 服务器地址
            'hostname'    => SAE_MYSQL_HOST_M . ',' . SAE_MYSQL_HOST_S,
            // 数据库名
            'database'    => SAE_MYSQL_DB,
            // 用户名
            'username'    => SAE_MYSQL_USER,
            // 密码
            'password'    => SAE_MYSQL_PASS,
            // 端口
            'hostport'    => SAE_MYSQL_PORT,
            // 数据库连接参数
            'params'      => [],
            // 数据库编码默认采用utf8
            'charset'     => 'utf8',
            // 数据库表前缀
            'prefix'      => '',
            // 数据库调试模式
            'debug'       => false,
            // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
            'deploy'      => 1,
            // 数据库读写是否分离 主从式有效
            'rw_separate' => true,
            // 读写分离后 主服务器数量
            'master_num'  => 1,
            // 指定从服务器序号
            'slave_no'    => '',
        ],
        'log'              => [
            'type' => 'Sae',
        ],
        'cache'            => [
            'type'   => 'Sae',
            'path'   => CACHE_PATH,
            'prefix' => '',
            'expire' => 0,
        ],
        'file_upload_type' => 'Sae',
        'compile_type'     => 'Sae',
    ]),

    // 别名定义
    'alias'     => [
        'think\App'                             => CORE_PATH . 'App' . EXT,
        'think\Build'                           => CORE_PATH . 'Build' . EXT,
        'think\Cache'                           => CORE_PATH . 'Cache' . EXT,
        'think\Config'                          => CORE_PATH . 'Config' . EXT,
        'think\Console'                         => CORE_PATH . 'Console' . EXT,
        'think\Collection'                      => CORE_PATH . 'Collection' . EXT,
        'think\Controller'                      => CORE_PATH . 'Controller' . EXT,
        'think\Cookie'                          => CORE_PATH . 'Cookie' . EXT,
        'think\Db'                              => CORE_PATH . 'Db' . EXT,
        'think\Debug'                           => CORE_PATH . 'Debug' . EXT,
        'think\Error'                           => CORE_PATH . 'Error' . EXT,
        'think\Exception'                       => CORE_PATH . 'Exception' . EXT,
        'think\exception\DbException'           => CORE_PATH . 'exception' . DS . 'DbException' . EXT,
        'think\exception\Handle'                => CORE_PATH . 'exception' . DS . 'Handle' . EXT,
        'think\exception\HttpException'         => CORE_PATH . 'exception' . DS . 'HttpException' . EXT,
        'think\exception\HttpResponseException' => CORE_PATH . 'exception' . DS . 'HttpResponseException' . EXT,
        'think\exception\PDOException'          => CORE_PATH . 'exception' . DS . 'PDOException' . EXT,
        'think\exception\ErrorException'        => CORE_PATH . 'exception' . DS . 'ErrorException' . EXT,
        'think\exception\DbBindParamException'  => CORE_PATH . 'exception' . DS . 'DbBindParamException' . EXT,
        'think\exception\ThrowableError'        => CORE_PATH . 'exception' . DS . 'ThrowableError' . EXT,
        'think\File'                            => CORE_PATH . 'File' . EXT,
        'think\Hook'                            => CORE_PATH . 'Hook' . EXT,
        'think\Input'                           => CORE_PATH . 'Input' . EXT,
        'think\Lang'                            => CORE_PATH . 'Lang' . EXT,
        'think\Log'                             => CORE_PATH . 'Log' . EXT,
        'think\Model'                           => CORE_PATH . 'Model' . EXT,
        'think\Paginator'                       => CORE_PATH . 'Paginator' . EXT,
        'think\model\Relation'                  => CORE_PATH . 'model' . DS . 'Relation' . EXT,
        'think\model\Merge'                     => CORE_PATH . 'model' . DS . 'Merge' . EXT,
        'think\model\Pivot'                     => CORE_PATH . 'model' . DS . 'Pivot' . EXT,
        'think\Process'                         => CORE_PATH . 'Process' . EXT,
        'think\paginator\Collection'            => CORE_PATH . 'paginator' . DS . 'Collection' . EXT,
        'think\paginator\driver\Bootstrap'      => CORE_PATH . 'paginator' . DS . 'driver' . DS . 'Bootstrap' . EXT,
        'think\Request'                         => CORE_PATH . 'Request' . EXT,
        'think\Response'                        => CORE_PATH . 'Response' . EXT,
        'think\response\Json'                   => CORE_PATH . 'response' . DS . 'Json' . EXT,
        'think\response\Jsonp'                  => CORE_PATH . 'response' . DS . 'Jsonp' . EXT,
        'think\response\Redirect'               => CORE_PATH . 'response' . DS . 'Redirect' . EXT,
        'think\response\View'                   => CORE_PATH . 'response' . DS . 'View' . EXT,
        'think\response\Xml'                    => CORE_PATH . 'response' . DS . 'Xml' . EXT,
        'think\Route'                           => CORE_PATH . 'Route' . EXT,
        'think\Session'                         => CORE_PATH . 'Session' . EXT,
        'think\Template'                        => CORE_PATH . 'Template' . EXT,
        'think\Url'                             => CORE_PATH . 'Url' . EXT,
        'think\Validate'                        => CORE_PATH . 'Validate' . EXT,
        'think\View'                            => CORE_PATH . 'View' . EXT,
        'think\db\Connection'                   => CORE_PATH . 'db' . DS . 'Connection' . EXT,
        'think\db\connector\Mysql'              => CORE_PATH . 'db' . DS . 'connector' . DS . 'Mysql' . EXT,
        'think\db\Builder'                      => CORE_PATH . 'db' . DS . 'Builder' . EXT,
        'think\db\Builder\Mysql'                => CORE_PATH . 'db' . DS . 'builder' . DS . 'Mysql' . EXT,
        'think\db\Query'                        => CORE_PATH . 'db' . DS . 'Query' . EXT,
        'think\view\driver\Think'               => CORE_PATH . 'view' . DS . 'driver' . DS . 'Think' . EXT,
        'think\view\driver\Php'                 => CORE_PATH . 'view' . DS . 'driver' . DS . 'Php' . EXT,
        'think\template\driver\File'            => CORE_PATH . 'template' . DS . 'driver' . DS . 'File' . EXT,
        'think\log\driver\File'                 => CORE_PATH . 'log' . DS . 'driver' . DS . 'File' . EXT,
        'think\cache\driver\File'               => CORE_PATH . 'cache' . DS . 'driver' . DS . 'File' . EXT,
        'think\log\driver\Sae'                  => CORE_PATH . 'log' . DS . 'driver' . DS . 'Sae' . EXT,
        'think\cache\driver\Sae'                => CORE_PATH . 'cache' . DS . 'driver' . DS . 'Sae' . EXT,
        'think\template\driver\Sae'             => CORE_PATH . 'template' . DS . 'driver' . DS . 'Sae' . EXT,
    ],

];

<?php

define('ROOT', __DIR__);

require_once ROOT . '/../lib/framework/Helper/Autoloader.php';

use TE\Helper\Autoloader;
use TE\Mvc\Base;
use TE\Mvc\Server\Http\Server;
use TE\Mvc\Action\Interceptor\InterceptorManager;
use TE\Mvc\Router\Simple;

// 注册autoloader
Autoloader::registerNamespace(ROOT . '/../lib/framework', 'TE');
Autoloader::registerNamespace(ROOT . '/../app', 'Example');

// 定义注入对象
Base::setInjectiveObjects(require(ROOT . '/../config/injects.php'));

// 启动Server
new Server(new Simple(require(ROOT . '/../config/routes.php')), 
    new InterceptorManager(require(ROOT . '/../config/interceptors.php')));


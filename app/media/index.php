<?php

use Phalcon\Mvc\Application;                                    // phalcon приложение
use Phalcon\DI\FactoryDefault;
use Phalcon\Loader;                                             // автозагрузчик классов
use Phalcon\Config\Adapter\Ini as ConfigIni;                    // чтение конфигурационного ini-файла
use Multiple\Services\DebugService;                             // сервис логирования

define('APP_PATH', realpath('..') . '/apps/');                  // корневой каталог приложения
define('APP_CONFIG_DIR_PATH', APP_PATH . 'config/');            // конфигурационный каталог приложения
define('ROUTER_PATH', APP_CONFIG_DIR_PATH . 'router.php');      // router приложения
define('MOD_REG_PATH', APP_CONFIG_DIR_PATH . 'mod_reg.php');    // модули приложения
define('APP_CONFIG_PATH', APP_CONFIG_DIR_PATH . 'config.ini');  // общие сервисы приложения

try {

    $loader = new Loader();                                     // запустить автозагрузчик классов

    $loader->registerNamespaces(                                // указать каталоги с плагинами и сервисами
        array(
            'Multiple\Services' => APP_PATH . 'services/',
            'Multiple\Plugins'  => APP_PATH . 'plugins/'
        )
    )->register();

    $config = new ConfigIni(APP_CONFIG_PATH);                   // cчитать конфигурационнный файл приложения

    $di = new FactoryDefault();

    $di->setShared('debug', function() use ($config) {          // cконфигурировать общие сервисы приложения

        $debug = new DebugService(APP_PATH . $config->app->logPath, $config->app->devVersion);

        return $debug;
    });

    require ROUTER_PATH;                                        // cконфигурировать роутер

    $application = new Application($di);                        // создать приложение

    $application->registerModules(require MOD_REG_PATH);        // зарегистрировать модули из конфигурационного файла модулей

    echo $application->handle()->getContent();                  // обработка запроса

} catch (\Exception $e) {

    echo 'Exception: ', $e->getMessage();
}

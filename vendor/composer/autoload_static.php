<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa46eba691a72d70c3d758c4e875b81e
{
    public static $classMap = array (
        'AddController' => __DIR__ . '/../..' . '/app/admin/controllers/AddController.php',
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInitfa46eba691a72d70c3d758c4e875b81e' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitfa46eba691a72d70c3d758c4e875b81e' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Controller' => __DIR__ . '/../..' . '/app/admin/controllers/Controller.php',
        'DeleteController' => __DIR__ . '/../..' . '/app/admin/controllers/DeleteController.php',
        'EditController' => __DIR__ . '/../..' . '/app/admin/controllers/EditController.php',
        'IndexController' => __DIR__ . '/../..' . '/app/admin/controllers/IndexController.php',
        'LoginController' => __DIR__ . '/../..' . '/app/admin/controllers/LoginController.php',
        'LogoutController' => __DIR__ . '/../..' . '/app/admin/controllers/LogoutController.php',
        'PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'PagesModel' => __DIR__ . '/../..' . '/app/models/PagesModel.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfa46eba691a72d70c3d758c4e875b81e::$classMap;

        }, null, ClassLoader::class);
    }
}

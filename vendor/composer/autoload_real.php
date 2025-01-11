<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc6e1c1e50a20ca8b20a49f793ff708c1
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc6e1c1e50a20ca8b20a49f793ff708c1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc6e1c1e50a20ca8b20a49f793ff708c1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc6e1c1e50a20ca8b20a49f793ff708c1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

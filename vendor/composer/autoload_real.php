<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdbd11a8419d3dd69b4ba878b10e4671c
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdbd11a8419d3dd69b4ba878b10e4671c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdbd11a8419d3dd69b4ba878b10e4671c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdbd11a8419d3dd69b4ba878b10e4671c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

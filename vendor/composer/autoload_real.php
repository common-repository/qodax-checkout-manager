<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4699e9d68b0b4d3b087464e3b911b0ed
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

        spl_autoload_register(array('ComposerAutoloaderInit4699e9d68b0b4d3b087464e3b911b0ed', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4699e9d68b0b4d3b087464e3b911b0ed', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4699e9d68b0b4d3b087464e3b911b0ed::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

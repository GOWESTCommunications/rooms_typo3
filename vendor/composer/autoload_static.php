<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb5bdbafe0d7f8789ff14cff3e8d8abe
{
    public static $files = array (
        '0046fccc5b7c11e6f07877cd470f3cc8' => __DIR__ . '/../..' . '/Classes/Backend/ItemsProcFunc.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GoWest\\RoomsTypo3\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GoWest\\RoomsTypo3\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb5bdbafe0d7f8789ff14cff3e8d8abe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb5bdbafe0d7f8789ff14cff3e8d8abe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

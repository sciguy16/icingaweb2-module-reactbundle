<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf252d4bcd74072b8c11b9c886503ca8b
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '6b06ce8ccf69c43a60a1e48495a034c9' => __DIR__ . '/..' . '/react/promise-timer/src/functions.php',
        'd97a92f16d9d46b74cbec4132395f0a2' => __DIR__ . '/..' . '/clue/block-react/src/functions.php',
        'ebf8799635f67b5d7248946fe2154f4a' => __DIR__ . '/..' . '/ringcentral/psr7/src/functions_include.php',
        'cea474b4340aa9fa53661e887a21a316' => __DIR__ . '/..' . '/react/promise-stream/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Socket\\Raw\\' => 11,
        ),
        'R' => 
        array (
            'RingCentral\\Psr7\\' => 17,
            'React\\Stream\\' => 13,
            'React\\Socket\\' => 13,
            'React\\Promise\\Timer\\' => 20,
            'React\\Promise\\Stream\\' => 21,
            'React\\Promise\\' => 14,
            'React\\Http\\' => 11,
            'React\\HttpClient\\' => 17,
            'React\\EventLoop\\' => 16,
            'React\\Dns\\' => 10,
            'React\\Datagram\\' => 15,
            'React\\ChildProcess\\' => 19,
            'React\\Cache\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Predis\\' => 7,
        ),
        'C' => 
        array (
            'ConnectionManager\\Extra\\' => 24,
            'Clue\\React\\Socks\\' => 17,
            'Clue\\React\\Soap\\' => 16,
            'Clue\\React\\Redis\\' => 17,
            'Clue\\React\\Mq\\' => 14,
            'Clue\\React\\HttpProxy\\' => 21,
            'Clue\\React\\Buzz\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Socket\\Raw\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/socket-raw/src',
        ),
        'RingCentral\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/ringcentral/psr7/src',
        ),
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/socket/src',
        ),
        'React\\Promise\\Timer\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-timer/src',
        ),
        'React\\Promise\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-stream/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/http/src',
        ),
        'React\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/http-client/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/dns/src',
        ),
        'React\\Datagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/datagram/src',
        ),
        'React\\ChildProcess\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/child-process/src',
        ),
        'React\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'ConnectionManager\\Extra\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/connection-manager-extra/src',
        ),
        'Clue\\React\\Socks\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/socks-react/src',
        ),
        'Clue\\React\\Soap\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/soap-react/src',
        ),
        'Clue\\React\\Redis\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/redis-react/src',
        ),
        'Clue\\React\\Mq\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/mq-react/src',
        ),
        'Clue\\React\\HttpProxy\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/http-proxy-react/src',
        ),
        'Clue\\React\\Buzz\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/buzz-react/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Resque' => 
            array (
                0 => __DIR__ . '/..' . '/chrisboulton/php-resque/lib',
            ),
        ),
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
        'C' => 
        array (
            'Clue\\Redis\\Protocol' => 
            array (
                0 => __DIR__ . '/..' . '/clue/redis-protocol/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf252d4bcd74072b8c11b9c886503ca8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf252d4bcd74072b8c11b9c886503ca8b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf252d4bcd74072b8c11b9c886503ca8b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

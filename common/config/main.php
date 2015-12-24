<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // yii migrate --migrationPath=@yii/rbac/migrations
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
];

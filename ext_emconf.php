<?php

/**
 * Extension Manager/Repository config file for ext "powermail_extended".
 */
$EM_CONF['powermail_extended'] = [
    'title' => 'Powermail Extended',
    'description' => '',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'powermail' => '11.0.0-11.2.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Daoued\\PowermailExtended\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Haythem Daoud',
    'author_email' => 'haythemdaoud.x@gmail.com',
    'version' => '1.0.0',
];

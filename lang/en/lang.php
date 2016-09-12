<?php

return [

    'plugin' => [
        'name'        => 'Backups',
        'description' => 'Spatie Laravel Backup for OctoberCMS'
    ],

    'settings' => [
        'form' => [
            'backup_name'       => 'Name',
            'backup_path'       => 'Path',
            'backup_absolute'   => 'Absolute path',
            'backup_absolute_c' => 'ON: path will be used as absolut | OFF: path will be relative to storage directory',
            'toolbar'           => [
                'button_backup' => 'Make Backup',
                'backup_flash'  => 'Backup is finished successfully'
            ]
        ]
    ],

    'permissions' => [
        'backups' => [
            'tab'   => 'Backups',
            'label' => 'Access Backups settings'
        ]
    ]

];
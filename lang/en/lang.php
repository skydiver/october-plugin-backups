<?php

return [

    'plugin' => [
        'name'        => 'Backups',
        'description' => 'Spatie Laravel Backup for OctoberCMS'
    ],

    'settings' => [
        'form' => [
            'backup_name'          => 'Name',
            'backup_path'          => 'Path',
            'backup_absolute'      => 'Absolute path',
            'backup_absolute_c'    => 'ON: path will be used as absolut | OFF: path will be relative to storage directory',
            'backups_size_limit'   => 'Size limit',
            'backups_size_limit_c' => 'After cleaning up the backups remove the oldest backup until this amount of megabytes has been reached',
            'toolbar'              => [
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
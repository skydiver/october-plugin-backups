<?php

    namespace Martin\Backups;

    use App, Config;
    use System\Classes\PluginBase;
    use Martin\Backups\Models\Settings;

    class Plugin extends PluginBase {

        public function pluginDetails() {
            return [
                'name'        => 'martin.backups::lang.plugin.name',
                'description' => 'martin.backups::lang.plugin.description',
                'author'      => 'Martin M.',
                'icon'        => 'icon-life-ring',
                'homepage'    => 'https://octobercms.com/author/Martin'
            ];
        }

        public function boot() {

            # SETTINGS
            $backup_name = Settings::get('backup_name');
            $backup_path = Settings::get('backup_path');
            $backup_abs  = Settings::get('backup_absolute');

            # MODIFY PATH IF REQUIRED
            if($backup_abs == 0) {
                $backup_path = storage_path() . '/' . $backup_path . '/';
            }

            # CREATE filesystem
            Config::set('filesystems.disks.mbackups.driver', 'local');
            Config::set('filesystems.disks.mbackups.root'  , $backup_path);

            # SET name
            Config::set('laravel-backup.backup.name', $backup_name);

            # SET filesystem
            Config::set('laravel-backup.backup.destination.disks', 'mbackups');

            # SET backup monitor
            Config::set('laravel-backup.monitorBackups.0.name'   , $backup_name);
            Config::set('laravel-backup.monitorBackups.0.disks.0', 'mbackups');

            # LOAD CLASS
            App::register(\Spatie\Backup\BackupServiceProvider::class);

        }

        public function registerSettings() {
            return [
                'settings' => [
                    'label'       => 'martin.backups::lang.plugin.name',
                    'description' => 'martin.backups::lang.plugin.description',
                    'icon'        => 'icon-life-ring',
                    'class'       => '\Martin\Backups\Models\Settings',
                    'order'       => 500,
                    'permissions' => ['martin.backups.access'],
                    'category'    => 'system::lang.system.categories.system'
                ],
            ];
        }

        public function registerPermissions() {
            return [
                'martin.backups.access' => [
                    'tab'   => 'martin.backups::lang.permissions.backups.tab',
                    'label' => 'martin.backups::lang.permissions.backups.label'
                ],
            ];
        }

        public function registerFormWidgets() {
            return [
                'Martin\Backups\FormWidgets\BackupsToolbar' => [
                    'label' => 'Backups Toolbar',
                    'code'  => 'backups_toolbar'
                ]
            ];
        }

    }

?>
<?php

    namespace Martin\Backups\FormWidgets;

    use Config;
    use Backend\Classes\FormWidgetBase;
    use Martin\BlogRevisions\Controllers\Revisions as ControllerRevisions;

    class BackupsToolbar extends FormWidgetBase {

        public function widgetDetails() {
            return [
                'name'        => 'Backups Toolbar',
                'description' => 'Backups Toolbar'
            ];
        }

        public function render() {
            return $this->makePartial('toolbar');
        }

        public function onBackup() {
            \Artisan::call('backup:run');
            \Flash::success(e(trans('martin.backups::lang.settings.form.toolbar.backup_flash')));
        }

    }

?>
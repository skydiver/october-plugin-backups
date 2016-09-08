<?php

    namespace Martin\Backups\Models;

    use Model;
    use Lang;
    use Cms\Classes\Page;

    class Settings extends Model {

        use \October\Rain\Database\Traits\Validation;

        public $rules = [

        ];

        public $attributeNames;
        public $implement      = ['System.Behaviors.SettingsModel'];
        public $settingsCode   = 'martin_backups_settings';
        public $settingsFields = 'fields.yaml';

    }

?>
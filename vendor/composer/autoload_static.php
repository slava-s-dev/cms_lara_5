<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedc9d662b0f06a8c2b9bb0aff37e8400
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vis\\Builder\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vis\\Builder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Vis\\Builder\\Authenticate' => __DIR__ . '/../..' . '/src/Http/Middleware/Authenticate.php',
        'Vis\\Builder\\AuthenticateFrontend' => __DIR__ . '/../..' . '/src/Http/Middleware/AuthenticateFrontend.php',
        'Vis\\Builder\\DashboardController' => __DIR__ . '/../..' . '/src/Http/Controllers/DashboardController.php',
        'Vis\\Builder\\EditorController' => __DIR__ . '/../..' . '/src/Http/Controllers/EditorController.php',
        'Vis\\Builder\\Event' => __DIR__ . '/../..' . '/src/Models/Event.php',
        'Vis\\Builder\\Facades\\Jarboe' => __DIR__ . '/../..' . '/src/Http/Facades/Jarboe.php',
        'Vis\\Builder\\Fields\\AbstractField' => __DIR__ . '/../..' . '/src/Http/Fields/AbstractField.php',
        'Vis\\Builder\\Fields\\CheckboxField' => __DIR__ . '/../..' . '/src/Http/Fields/CheckboxField.php',
        'Vis\\Builder\\Fields\\ColorField' => __DIR__ . '/../..' . '/src/Http/Fields/ColorField.php',
        'Vis\\Builder\\Fields\\CustomField' => __DIR__ . '/../..' . '/src/Http/Fields/CustomField.php',
        'Vis\\Builder\\Fields\\DateField' => __DIR__ . '/../..' . '/src/Http/Fields/DateField.php',
        'Vis\\Builder\\Fields\\DatetimeField' => __DIR__ . '/../..' . '/src/Http/Fields/DatetimeField.php',
        'Vis\\Builder\\Fields\\FileField' => __DIR__ . '/../..' . '/src/Http/Fields/FileField.php',
        'Vis\\Builder\\Fields\\FileStorageField' => __DIR__ . '/../..' . '/src/Http/Fields/FileStorageField.php',
        'Vis\\Builder\\Fields\\ForeignField' => __DIR__ . '/../..' . '/src/Http/Fields/ForeignField.php',
        'Vis\\Builder\\Fields\\GroupField' => __DIR__ . '/../..' . '/src/Http/Fields/GroupField.php',
        'Vis\\Builder\\Fields\\ImageField' => __DIR__ . '/../..' . '/src/Http/Fields/ImageField.php',
        'Vis\\Builder\\Fields\\ImageStorageField' => __DIR__ . '/../..' . '/src/Http/Fields/ImageStorageField.php',
        'Vis\\Builder\\Fields\\ManyToManyField' => __DIR__ . '/../..' . '/src/Http/Fields/ManyToManyField.php',
        'Vis\\Builder\\Fields\\PatternField' => __DIR__ . '/../..' . '/src/Http/Fields/PatternField.php',
        'Vis\\Builder\\Fields\\ReadonlyField' => __DIR__ . '/../..' . '/src/Http/Fields/ReadonlyField.php',
        'Vis\\Builder\\Fields\\SelectField' => __DIR__ . '/../..' . '/src/Http/Fields/SelectField.php',
        'Vis\\Builder\\Fields\\SetField' => __DIR__ . '/../..' . '/src/Http/Fields/SetField.php',
        'Vis\\Builder\\Fields\\Subactions\\AbstractSubaction' => __DIR__ . '/../..' . '/src/Http/Fields/Subactions/AbstractSubaction.php',
        'Vis\\Builder\\Fields\\Subactions\\Translate' => __DIR__ . '/../..' . '/src/Http/Fields/Subactions/Translate.php',
        'Vis\\Builder\\Fields\\TextField' => __DIR__ . '/../..' . '/src/Http/Fields/TextField.php',
        'Vis\\Builder\\Fields\\TextareaField' => __DIR__ . '/../..' . '/src/Http/Fields/TextareaField.php',
        'Vis\\Builder\\Fields\\TimestampField' => __DIR__ . '/../..' . '/src/Http/Fields/TimestampField.php',
        'Vis\\Builder\\Fields\\WysiwygField' => __DIR__ . '/../..' . '/src/Http/Fields/WysiwygField.php',
        'Vis\\Builder\\GeneratePassword' => __DIR__ . '/../..' . '/src/Console/GeneratePassword.php',
        'Vis\\Builder\\Group' => __DIR__ . '/../..' . '/src/Models/Group.php',
        'Vis\\Builder\\Handlers\\ActionsHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/ActionsHandler.php',
        'Vis\\Builder\\Handlers\\ButtonsHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/ButtonsHandler.php',
        'Vis\\Builder\\Handlers\\CustomClosureHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/CustomClosureHandler.php',
        'Vis\\Builder\\Handlers\\CustomHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/CustomHandler.php',
        'Vis\\Builder\\Handlers\\ExportHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/ExportHandler.php',
        'Vis\\Builder\\Handlers\\ImportHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/ImportHandler.php',
        'Vis\\Builder\\Handlers\\QueryHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/QueryHandler.php',
        'Vis\\Builder\\Handlers\\RequestHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/RequestHandler.php',
        'Vis\\Builder\\Handlers\\ViewHandler' => __DIR__ . '/../..' . '/src/Http/Handlers/ViewHandler.php',
        'Vis\\Builder\\Helpers\\Traits\\GroupsFieldTrait' => __DIR__ . '/../..' . '/src/Http/Traits/GroupsFieldTrait.php',
        'Vis\\Builder\\Helpers\\Traits\\ImagesTrait' => __DIR__ . '/../..' . '/src/Http/Traits/ImagesTrait.php',
        'Vis\\Builder\\Helpers\\Traits\\QuickEditTrait' => __DIR__ . '/../..' . '/src/Http/Traits/QuickEditTrait.php',
        'Vis\\Builder\\Helpers\\Traits\\SeoTrait' => __DIR__ . '/../..' . '/src/Http/Traits/SeoTrait.php',
        'Vis\\Builder\\Helpers\\Traits\\TranslateTrait' => __DIR__ . '/../..' . '/src/Http/Traits/TranslateTrait.php',
        'Vis\\Builder\\Helpers\\Traits\\ViewPageTrait' => __DIR__ . '/../..' . '/src/Http/Traits/ViewPageTrait.php',
        'Vis\\Builder\\Helpers\\Traits\\ViewedTrait' => __DIR__ . '/../..' . '/src/Http/Traits/ViewedTrait.php',
        'Vis\\Builder\\Helpers\\URLify' => __DIR__ . '/../..' . '/src/libs/URLify.php',
        'Vis\\Builder\\Helpers\\UsersHandler' => __DIR__ . '/../..' . '/src/Http/Helpers/UsersHandler.php',
        'Vis\\Builder\\Img' => __DIR__ . '/../..' . '/src/libs/Img.php',
        'Vis\\Builder\\InstallCommand' => __DIR__ . '/../..' . '/src/Console/InstallCommand.php',
        'Vis\\Builder\\JarboeController' => __DIR__ . '/../..' . '/src/Http/Controllers/JarboeController.php',
        'Vis\\Builder\\LoginController' => __DIR__ . '/../..' . '/src/Http/Controllers/LoginController.php',
        'Vis\\Builder\\OptmizationImg' => __DIR__ . '/../..' . '/src/libs/OptmizationImg.php',
        'Vis\\Builder\\PhotosController' => __DIR__ . '/../..' . '/src/Http/Controllers/PhotosController.php',
        'Vis\\Builder\\Revision' => __DIR__ . '/../..' . '/src/Models/Revision.php',
        'Vis\\Builder\\Setting' => __DIR__ . '/../..' . '/src/Models/Setting.php',
        'Vis\\Builder\\SettingSelect' => __DIR__ . '/../..' . '/src/Models/SettingSelect.php',
        'Vis\\Builder\\SettingsController' => __DIR__ . '/../..' . '/src/Http/Controllers/SettingsController.php',
        'Vis\\Builder\\TBController' => __DIR__ . '/../..' . '/src/Http/Controllers/TBController.php',
        'Vis\\Builder\\TBTreeController' => __DIR__ . '/../..' . '/src/Http/Controllers/TBTreeController.php',
        'Vis\\Builder\\TableAdminController' => __DIR__ . '/../..' . '/src/Http/Controllers/TableAdminController.php',
        'Vis\\Builder\\Tree' => __DIR__ . '/../..' . '/src/Models/Tree.php',
        'Vis\\Builder\\TreeCatalogController' => __DIR__ . '/../..' . '/src/Http/Controllers/TreeCatalogController.php',
        'Vis\\Builder\\TreeController' => __DIR__ . '/../..' . '/src/Http/Controllers/TreeController.php',
        'Vis\\Builder\\TreeObserver' => __DIR__ . '/../..' . '/src/Models/TreeObserver.php',
        'Vis\\Builder\\User' => __DIR__ . '/../..' . '/src/Models/User.php',
        'Vis\\Builder\\ViewStatisticController' => __DIR__ . '/../..' . '/src/Http/Controllers/ViewStatisticController.php',
        'Vis\\Builder\\Watermark' => __DIR__ . '/../..' . '/src/libs/Watermark.php',
        'Vis\\TranslationsCMS\\Trans' => __DIR__ . '/../..' . '/src/Models/Trans.php',
        'Vis\\TranslationsCMS\\Translate' => __DIR__ . '/../..' . '/src/Models/Translate.php',
        'Vis\\TranslationsCMS\\TranslateController' => __DIR__ . '/../..' . '/src/Http/Controllers/TranslateController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedc9d662b0f06a8c2b9bb0aff37e8400::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedc9d662b0f06a8c2b9bb0aff37e8400::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedc9d662b0f06a8c2b9bb0aff37e8400::$classMap;

        }, null, ClassLoader::class);
    }
}

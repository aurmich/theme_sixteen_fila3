import preset from '../../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        '../../app/Filament/**/*.php',
        '../../resources/views/filament/**/*.blade.php',
        //'../../vendor/filament/**/*.blade.php',
        '../../vendor/filament/**/*.blade.php',
<<<<<<< HEAD
        '../../Modules/**/resources/views/**/*.blade.php',
        '../../Themes/**/resources/views/**/*.blade.php',
=======
        '../../Modules/**/Resources/views/**/*.blade.php',
        '../../Themes/**/Resources/views/**/*.blade.php',
>>>>>>> 90e5aa2 (.)
        '../../Modules/**/Filament/**/*.php',
        '../../../public_html/vendor/**/*.blade.php',
    ],
}

const defaultTheme = require('tailwindcss/defaultTheme');
//import preset from '../../vendor/filament/support/tailwind.config.preset';

module.exports = {
    //presets: [preset],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },

    content: [

        '../../app/Filament/**/*.php',
        '../../resources/views/**/*.blade.php',
        '../../vendor/filament/**/*.blade.php',
        "../../Modules/**/Filament/**/*.php",
        "../../Modules/**/Resources/views/**/*.blade.php",
        "../../storage/framework/views/*.php",
        "../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./Resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../Themes/**/Resources/views/**/*.blade.php",  //----------- e' un tema !!!!
        "../../../public_html/vendor/**/*.blade.php",
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}

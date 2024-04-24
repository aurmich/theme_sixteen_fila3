const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
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
        './app/**/*.php',
        "./resources/**/*.{php,html,js,jsx,ts,tsx,vue,twig}",
        '../../app/Filament/**/*.php',
        '../../resources/views/filament/**/*.blade.php',
        '../../vendor/filament/**/*.blade.php',
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./Resources/views/**/*.blade.php",
        "../../Modules/**/Filament/**/*.php",
        "../../Modules/Resources/views/**/*.blade.php",
        "../../resources/views/filament/**/*.blade.php",
        "../../vendor/filament/**/*.blade.php",
        "../../resources/views/**/*.blade.php",
        "../../storage/framework/views/*.php",
        "../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
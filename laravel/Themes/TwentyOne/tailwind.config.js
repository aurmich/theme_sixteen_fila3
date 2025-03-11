/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
		"./storage/framework/views/*.php",
		"./resources/views/**/*.blade.php",
<<<<<<< HEAD
<<<<<<< HEAD
		"./resources/views/**/*.blade.php",
		"../../Modules/**/Filament/**/*.php",
		"../../Modules/resources/views/**/*.blade.php",
=======
<<<<<<< HEAD
		"./Resources/views/**/*.blade.php",
		"../../Modules/**/Filament/**/*.php",
		"../../Modules/Resources/views/**/*.blade.php",
=======
		"./resources/views/**/*.blade.php",
		"../../Modules/**/Filament/**/*.php",
		"../../Modules/resources/views/**/*.blade.php",
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
		"./resources/views/**/*.blade.php",
		"../../Modules/**/Filament/**/*.php",
		"../../Modules/resources/views/**/*.blade.php",
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
		"../../resources/views/filament/**/*.blade.php",
		"../../vendor/filament/**/*.blade.php",
		"../../resources/views/**/*.blade.php",
		"../../storage/framework/views/*.php",
        "../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./node_modules/flowbite/**/*.js",
	],
	theme: {
		fontFamily: {
			sans: ["Figtree", "ui-sans-serif", "system-ui", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
		},
		extend: {},
	},
    plugins: [
		require('flowbite/plugin'),
		require('@tailwindcss/typography'),
    ],
};

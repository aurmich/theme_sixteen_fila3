import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
	build: {
<<<<<<< HEAD
<<<<<<< HEAD
		outDir: "./resources/dist",
		emptyOutDir: false,
        manifest: 'manifest.json',
=======
<<<<<<< HEAD
		outDir: "./Resources/dist",
		emptyOutDir: false,
		manifest: true,
=======
		outDir: "./resources/dist",
		emptyOutDir: false,
        manifest: 'manifest.json',
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
		outDir: "./resources/dist",
		emptyOutDir: false,
        manifest: 'manifest.json',
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
		rollupOptions: {
			output: {
				entryFileNames: `assets/[name].js`,
				chunkFileNames: `assets/[name].js`,
				assetFileNames: `assets/[name].[ext]`,
			},
		},
	},
	ssr: {
		noExternal: ["chart.js/**"],
	},
	plugins: [
		laravel({
			publicDirectory: "../../../public_html/",
<<<<<<< HEAD
<<<<<<< HEAD
			input: [__dirname + "/resources/css/app.css", __dirname + "/resources/js/app.js", __dirname + "/resources/css/filament/admin/theme.css"],
=======
<<<<<<< HEAD
			input: [__dirname + "/Resources/css/app.css", __dirname + "/Resources/js/app.js", __dirname + "/Resources/css/filament/admin/theme.css"],
=======
			input: [__dirname + "/resources/css/app.css", __dirname + "/resources/js/app.js", __dirname + "/resources/css/filament/admin/theme.css"],
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
=======
			input: [__dirname + "/resources/css/app.css", __dirname + "/resources/js/app.js", __dirname + "/resources/css/filament/admin/theme.css"],
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
			refresh: [...refreshPaths, "app/Livewire/**"],
		}),
	],
});

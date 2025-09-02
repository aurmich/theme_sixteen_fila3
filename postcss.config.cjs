module.exports = {
    plugins: {
        'tailwindcss/nesting': 'postcss-nesting',
<<<<<<< HEAD
=======
        'postcss-import': {
            resolve(id) {
                return require.resolve(id);
            },
        },
>>>>>>> 1d4e669 (.)
        tailwindcss: {},
        autoprefixer: {},
    },
}

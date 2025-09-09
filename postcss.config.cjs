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
>>>>>>> 109edea (.)
        tailwindcss: {},
        autoprefixer: {},
    },
}

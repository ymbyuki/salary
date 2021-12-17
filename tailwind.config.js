module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        backgroundColor: theme => ({
            'pantone': '#D3927E',
        }),
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
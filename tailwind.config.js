module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                pantone: {
                    orange: '#D3927E',
                    blue: '#6869AC',
                    green: '#85A195',
                    red: '#8A4B5E',
                }
            },
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
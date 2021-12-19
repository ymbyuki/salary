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
                // pantone: '#D3927E',
                // pantone_blue: '#6869AC',
                pantone: {
                    orange: '#D3927E',
                    blue: '#6869AC',
                }
            },
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
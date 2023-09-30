/** @type {import('tailwindcss').Config} */

import tailwindcssFormsPlugin from '@tailwindcss/forms'

export default {
    content: ['./resources/**/*.blade.php', './resources/**/*.js'],
    theme: {
        extend: {},
    },
    plugins: [tailwindcssFormsPlugin],
}

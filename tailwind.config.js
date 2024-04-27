/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html, js, php}', './dist/**/*/.js'],
  theme: {
    extend: {
      fontFamily: {
        'poppins' : ["'poppins'", 'sans-serif']
      }
    },
  },
  plugins: [],
}


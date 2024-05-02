/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./app/views/**/*.{html,js,php}', './app/dist/**/*/.js'],
  theme: {
    extend: {
      fontFamily: {
        'poppins' : ["'poppins'", 'sans-serif']
      }
    },
  },
  plugins: [],
}


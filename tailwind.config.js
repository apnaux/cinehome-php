/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        'instrument': ['Instrument Sans', 'sans-serif'],
        'solitus': ['Solitus', 'sans-serif'],
      },
    },
  },
  plugins: [],
}


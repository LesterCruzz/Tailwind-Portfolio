/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    container: {
      center: true,
      padding: "2rem",
    },
    extend: {
      colors: {
        'light': '#ffffff',
        'orange': '#ff4d05',
        'dark': '#09182b',
        'primary': '#83a0bd',
      },
      fontFamily: {
        'Montserrat': 'sans-serif',
       },
    },
  },
  plugins: [],
}
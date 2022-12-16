/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./auth/*.php",
    "./landing-page/**/*.php",
    "./components/*.{html,js,php}",
    "./dashboard/*/**/.{html,js,php}",
    "./landing-page/gabung.php",
    "./components/landing-nav.php"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#00d451",
      },
    },
  },
  daisyui: {
    themes: false,
  },
  plugins: [require("daisyui")],
};

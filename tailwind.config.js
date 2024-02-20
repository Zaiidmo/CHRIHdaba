/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "primary": "#1B6396",
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
        salsa: ["Salsa", "cursive"],
    },
    fontSize: {
        x12: "10rem",
        sss: "0.5rem",
    },
    },
  },
  plugins: [],
}


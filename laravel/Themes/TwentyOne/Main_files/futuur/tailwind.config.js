/** @type {import('tailwindcss/defaultTheme')} */
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        roboto: ["Roboto", ...defaultTheme.fontFamily.serif],
      },
      colors: {
        neutral: {
          1: "#edefed",
          2: "#e0e0e0",
          3: "#777777",
          4: "#0f2834",
          5: "#050f14",
        },
        blue: {
          1: "#1591ed",
          2: "#b1daf9",
          3: "#095187",
          4: "#1e70bf",
          5: "#0a72bf",
        },
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};

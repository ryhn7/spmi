module.exports = {
  purge: {
    content: ["./resources/**/*.{blade.php,js}", "./node_modules/tw-elements/dist/js/**/*.js"],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      open: ["Open Sans", "sans-serif"],
    },
    backgroundSize: {
      auto: "auto",
      cover: "cover",
      contain: "contain",
      "100%": "100%",
    },
    extend: {
      backgroundImage: {
        underline1: "url('./assets/Underline1.svg')",
        underline2: "url('./assets/Underline2.svg')",
        underline3: "url('./assets/Underline3.svg')",
        underline4: "url('./assets/Underline4.svg')",
        highlight3: "url('./assets/Highlight3.svg')",
      },
      keyframes: {
        "fade-in-down": {
          "0%": {
            opacity: "0",
            transform: "translateY(-10px)",
          },
          "100%": {
            opacity: "1",
            transform: "translateY(0)",
          },
        },
      },
      animation: {
        "fade-in-down": "fade-in-down 0.5s ease-out",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};

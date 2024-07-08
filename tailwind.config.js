/** @type {import('tailwindcss').Config} */
export default {
  prefix: 'tw-',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme:  { 
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/public/images/trasferimento.jpeg')",
        'card-pattern-1': "url('/public/images/car-wash-expert-using-water-600nw-2287564617.webp')",
      },
      colors: {
        'overlay': 'rgba(0, 0, 0, 0.5)',
      },
      animation: {
        slideInLeft: 'slideInLeft 1s forwards',
        slideInDown: 'slideInDown 1s forwards',
        shake: 'shake 0.3s linear infinite both',
      },
      keyframes: {
        slideInLeft: {
          '0%': { transform: 'translateX(-120%)' },
          '100%': { transform: 'translateX(0)' },
        },
        slideInDown: {
          '0%': { transform: 'translateY(-100%)' },
          '100%': { transform: 'translateY(0)' },
        },
        shake: {
          '0%, 100%': { transform: 'translate(0)' },
          '20%, 80%': { transform: 'translate(-2px, 2px)' },
          '40%, 60%': { transform: 'translate(-2px, -2px)' },
        },
      },
    },
  },
  plugins: [
    require("daisyui"),
  ],
}

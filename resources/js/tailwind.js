const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  theme: {
    extend: {
     fontFamily: {
      sans: [
       "Alegreya Sans",
       ...defaultTheme.fontFamily.sans
      ]
     },
     colors: {
      grey: {
       '100': '#f5f5f5',
       '200': '#eeeeee',
       '300': '#e0e0e0',
       '400': '#bdbdbd',
       '500': '#9e9e9e',
       '600': '#757575',
       '700': '#616161',
       '800': '#424242',
       '900': '#212121',
      },
      "kaleskop-gold": {
       '200': '#ffe6be',
       '400': '#ffd694',
       default: '#fbc56d',
       '600': '#dca244',
       '800': '#ba8022'
      },
      "kaleskop-green": {
       '200': '#a7e0d2',
       '400': '#71c3ae',
       default: '#47a38c',
       '600': '#2c8f76',
       '800': '#167960'
      },
      "kaleskop-blue": {
       '200': '#b8b1e4',
       '400': '#8980ca',
       default: '#6359ae',
       '600': '#483d99',
       '800': '#312581'
      }
     }
    }
  },
  variants: {
   backgroundColor: ['responsive', 'hover', 'focus', 'active'],
  },
  plugins: []
}

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '*.php',
    'templates/**/*.{php,twig}',
    './Components/**/*.{php,twig}'
  ],
  theme: {
    borderWidth: {
      DEFAULT: '1px',
      0: '0',
      2: '2px',
      3: '3px'
    },
    colors: {
      white: '#fff',
      black: '#000',
      grey: '#f9f9f9',
      darkgrey: '#333',
      yellow: '#fed300',
      blue: '#263978',
      acqua: '#51bad9',
      azulgrey: '#e6ecee',
      current: 'currentColor',
      transparent: 'transparent'
    },
    fontSize: {
      body: ['1.25rem'],
      button: ['1rem'],
      superTitle: ['4.375rem'],
      superSubtitle: ['1.875rem'],
      h1: ['2.25rem'],
      h2: ['1.75rem'],
      h3: ['1.25rem'],
      menu: ['1rem']
    },
    screens: {
      sm: '640px',
      md: '780px',
      lg: '1180px',
      xl: '1440px'
    },
    extend: {
      aspectRatio: {
        '16/6': '16 / 6',
        '4/3': '4 / 3',
        '3/4': '3 / 4',
        '2/1': '2 / 1'
      },
      borderWidth: {
        DEFAULT: '1px',
        0: '0',
        2: '2px',
        3: '3px',
        4: '4px'
      },
      spacing: {
        xs: '10px',
        sm: '20px',
        md: '35px',
        lg: '50px',
        xl: '75px',
        xxl: '115px'
      }
    }
  },
  plugins: []
}

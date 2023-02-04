const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/vendor/share-links/buttons.antlers.php',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
      borderStyles: {
          styles: true, // defaults to false
          colors: true, // defaults to false
      },
    extend: {
        backgroundImage: {
            'hero-pattern': "linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url('https://10guru.fra1.cdn.digitaloceanspaces.com/assets/pages/hero.png')",
            'talk-to': "linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)),url('https://10guru.fra1.cdn.digitaloceanspaces.com/assets/pages/tall-to-us.png')",
            'client-work': "linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url('https://10guru.fra1.cdn.digitaloceanspaces.com/assets/pages/client-work.png')",
            'claycrib-app': "linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url('https://10guru.fra1.cdn.digitaloceanspaces.com/assets/pages/claycrib-app.png')",
            'malaya-app': "linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url('https://10guru.fra1.cdn.digitaloceanspaces.com/assets/pages/malaya.png')",
        },
        fontFamily: {
            'sans': ['Helvetica', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            'green': {
                '50':  '#f6f7f2',
                '100': '#ecf0d2',
                '200': '#d3e4a1',
                '300': '#a1c76b',
                '400': '#32cd32', //default
                '500': '#408821',
                '600': '#347116',
                '700': '#2c5614',
                '800': '#1f3b11',
                '900': '#15240e',
            },
            'orient': {
                '50':  '#f6f8f8',
                '100': '#e5f1f6',
                '200': '#c4e1ea',
                '300': '#92c2d0',
                '400': '#599dad',
                '500': '#427c8c',
                '600': '#00637b', //default
                '700': '#2c4a55',
                '800': '#1f323c',
                '900': '#131e27',
            },
            'blue': {
                '50':  '#f5f9fa',
                '100': '#ddf1fb',
                '200': '#b7def8',
                '300': '#87beec',
                '400': '#5699de',
                '500': '#3280cd',//default
                '600': '#365abc',
                '700': '#2c4498',
                '800': '#1f2e6e',
                '900': '#121c46',
            },
            'pink': {
                '50':  '#fcfcfb',
                '100': '#faeff3',
                '200': '#f6cce8',
                '300': '#eb9fcd',
                '400': '#e970af',
                '500': '#cd32cd', //default
                '600': '#c63274',
                '700': '#9f2655',
                '800': '#441144',
                '900': '#46111d',
            },
            'ochre': {
                '50':  '#fcfaf6',
                '100': '#f9f0c9',
                '200': '#f3da94',
                '300': '#e1b460',
                '400': '#cd8032', //default
                '500': '#b0671e',
                '600': '#924d13',
                '700': '#703a11',
                '800': '#4d280e',
                '900': '#32190a',
            },
        },
    },
  },
  variants: {
    extend: {
        animation: ['group-hover'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('tailwindcss-border-styles')(),
  ],
}


/** @type {import('tailwindcss').Config} */
export default {
  presets: [
    require("./vendor/wireui/wireui/tailwind.config.js")
  ],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/wireui/wireui/src/*.php",
    "./vendor/wireui/wireui/ts/**/*.ts",
    "./vendor/wireui/wireui/src/WireUi/**/*.php",
    "./vendor/wireui/wireui/src/Components/**/*.php",
  ],
  theme: {
    extend: {
      gridTemplateColumns: {
        'auto-fit-card': 'repeat(auto-fit, minmax(250px, 1fr))',
      },
      maxWidth: {
        'card': '330px',
      },
      colors: {
        'background': '#F5F3F0',
        primary: {
          '100': '#E6F0FA',
          '200': '#CCE1F5',
          '300': '#99C3EB',
          '400': '#4A90E2',
          '500': '#3380CC',
          '600': '#2D70B8',
          '700': '#1F4C7A',
          '800': '#17385C',
          '900': '#0F243D',
        },
        secondary: {
          '100': '#F9F6EF',
          '200': '#F3EED9',
          '300': '#E7DDB3',
          '400': '#E8DFCA',
          '500': '#D1C5A3',
          '600': '#B8A97D',
          '700': '#8F7F5A',
          '800': '#67563A',
          '900': '#3F2E1C',
        },
        accent: {
          '100': '#EAF2F9',
          '200': '#D5E5F3',
          '300': '#ABCBE7',
          '400': '#8CB2D9',
          '500': '#6A98C6',
          '600': '#4A7BAA',
          '700': '#365A7D',
          '800': '#243C52',
          '900': '#121E29',
        },
        validation: {
          '100': '#EAF4EA',
          '200': '#D5E9D5',
          '300': '#ABCDAA',
          '400': '#8CB28C',
          '500': '#478548',
          '600': '#3A6E3A',
          '700': '#2C522C',
          '800': '#1E371E',
          '900': '#0F1B0F',
        },
        info: {
          '100': '#EAF0F4',
          '200': '#D5E1E9',
          '300': '#ABC3D3',
          '400': '#8CA6BC',
          '500': '#476085',
          '600': '#3A4E6A',
          '700': '#2C3B4F',
          '800': '#1E2934',
          '900': '#0F141A',
        },
        error: {
          '100': '#F9EAEA',
          '200': '#F3D5D5',
          '300': '#E7ABAB',
          '400': '#DB8080',
          '500': '#BF4040',
          '600': '#A63333',
          '700': '#7A2626',
          '800': '#521A1A',
          '900': '#2A0D0D',
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}


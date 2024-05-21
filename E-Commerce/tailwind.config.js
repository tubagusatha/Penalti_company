/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'Futura': ['Futura'],
        'Font-Products': ['Product Sans'],
      },
      colors: {
        primary : '#14b8a6',
        secondary : '#64748b',
        third : '#151515',
        dark : '#000000',
        gray : '#7D7D7D',
        red : '#FF0000',
        darkred: '#CF082D',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')({
      charts:true
    }),
    
  ],
}
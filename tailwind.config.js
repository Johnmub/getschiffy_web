/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/static/js/**/*.js",
  ],
  theme: {
    screens: {
      'sm':'640px',
      'md':'768px',
      'lg':'1024px',
      'xl':'1280px',
      '2xl':'1536px',
      'menu_desktop':'960px',
      'roadmap_form':'900px',
    },
    colors: {
      'yellow':'#F2CB05',
      'white':'#FFFFFF',
      'black':'#130806',
      'transparent':'#00000000',
      'telegram':'#0088cc',
    },
    extend: {
      animation:{
        'animate-bounce-slow': 'bounce 2.5s infinite',
      }
    }
  },
  plugins: [],
}

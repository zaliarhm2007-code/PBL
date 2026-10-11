/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html", "./js/**/*.js"], // Membaca semua file HTML dan JS Anda
  theme: {
    extend: {
      fontFamily: { 
        sans: ['"Plus Jakarta Sans"', 'sans-serif'] 
      },
      colors: {
        brand: {
          navy: '#0B1325',
          darkCard: '#0F172A',
          darkInput: '#1E293B',
          yellow: '#FFFF00',
          yellowHover: '#CCCC00',
          slateBg: '#F8FAFC'
        }
      }
    }
  },
  plugins: [],
}

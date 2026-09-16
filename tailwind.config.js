/** @type {import('tailwindcss').Config} */

// Clases construidas dinámicamente en PHP (blog.php y admin/directorio.php).
// No aparecen como tokens completos en el código, por eso se incluyen aquí.
const coloresDinamicos = ['blue', 'emerald', 'teal', 'purple', 'cyan', 'gray', 'red', 'amber', 'pink'];
const safelist = [];
for (const c of coloresDinamicos) {
  safelist.push(
    `hover:border-${c}-500/30`,
    `from-${c}-900/30`,
    `text-${c}-400/50`,
    `text-${c}-400/70`,
    `bg-${c}-500/20`,
    `bg-${c}-500/10`,
    `text-${c}-400`,
    `text-${c}-300`,
    `border-${c}-500/30`,
    `border-${c}-500/20`,
    `group-hover:text-${c}-400`,
    `hover:text-${c}-300`
  );
}

module.exports = {
  darkMode: 'class',
  content: [
    './*.php',
    './includes/**/*.php',
    './admin/**/*.php',
    './scripts/**/*.html'
  ],
  safelist,
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif']
      },
      colors: {
        brand: {
          blue: '#3b82f6',
          teal: '#2dd4bf',
          dark: '#0a0a0c',
          card: '#121215'
        }
      }
    }
  },
  plugins: []
};

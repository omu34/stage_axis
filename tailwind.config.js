/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['dist/*.{html,js}'],
  theme: {
    fontFamily: {  
      mine:{    
      'avenir-bold': ['AvenirNextLTPro-Bold', 'sans'],
      'avenir-regular': ['AvenirNextLTPro-Regular', 'sans'],
      'unbounded-bold': ['Unbounded-Bold', 'sans'],
      'unbounded-medium': ['Unbounded-Medium', 'sans'],}     
  },
    extend: {},
    
    variants: {},
    plugins: [],
  }
}




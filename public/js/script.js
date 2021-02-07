
window.addEventListener('scroll', function(e) {
   var position = window.scrollY;

   if(position > 300){
      document.querySelector('#top').classList.remove('invisible');
      document.querySelector('#top').classList.add('visible');
   } else {
      document.querySelector('#top').classList.remove('visible');
      document.querySelector('#top').classList.add('invisible');
   }
   });

   function buttonTop() 
   {
      window.scrollTo(0, 0);
   };

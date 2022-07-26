let videoList = document.querySelectorAll('.video-list-container .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
   };
});

document.addEventListener("DOMContentLoaded", function() {
   // make it as accordion for smaller screens
   if (window.innerWidth < 992) {

       // close all inner dropdowns when parent is closed
       document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
           everydropdown.addEventListener('hidden.bs.dropdown', function() {
               // after dropdown is hidden, then find all submenus
               this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                   // hide every submenu as well
                   everysubmenu.style.display = 'none';
               });
           })
       });

       document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
           element.addEventListener('click', function(e) {
               let nextEl = this.nextElementSibling;
               if (nextEl && nextEl.classList.contains('submenu')) {
                   // prevent opening link if link needs to open dropdown
                   e.preventDefault();
                   if (nextEl.style.display == 'block') {
                       nextEl.style.display = 'none';
                   } else {
                       nextEl.style.display = 'block';
                   }

               }
           });
       })
   }
   // end if innerWidth
});
// DOMContentLoaded  end
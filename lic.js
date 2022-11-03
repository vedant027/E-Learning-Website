// ============================== NAVBAR ================================== //

// change navbar styles on scroll

window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle
    ('window-scroll', window.scrollY > 0);
  });
  
  // show/hide nav menu
  
  const menu = document.querySelector(".nav__menu");
  const menuBtn = document.querySelector("#open-menu-btn");
  const closeBtn = document.querySelector("#close-menu-btn");
  
  
  menuBtn.addEventListener('click' , () => {
     menu.style.display = "flex";
     closeBtn.style.display = "inline-block";
     menuBtn.style.display = "none";
  })
  
  
  // close nav menu
  const closeNav = () => {
    menu.style.display = "none";
     closeBtn.style.display = "none";
     menuBtn.style.display = "inline-block";
  }
  
  closeBtn.addEventListener('click', closeNav)
  
  // ============================= VIDEO SECTION & DROPDOWN ============================== //
  
  const videoPlayer = document.querySelector('iframe');
  const videoTitle = document.querySelector('.video-title');
  
  const showVideo = (videoId, title) => {
    let videoUrl = `https://www.youtube.com/embed/${videoId}?rel=0`;
    videoPlayer.setAttribute('src', videoUrl);
    videoTitle.innerHTML = title;
  };
  
  const allModules = document.querySelectorAll('.module-list-wrapper .module-container');
  
  allModules.forEach((currentModule) => {
    const module = currentModule.querySelector('.module');
    const allLessons = currentModule.querySelectorAll('.module-lesson');
    
    module.addEventListener('click', (data) => {
      const caret = module.querySelector('.caret');
      const lessonsWrapper = currentModule.querySelector('.module-items');
      const itemsHidden = lessonsWrapper.classList.toggle('items-hidden');
  
      if (itemsHidden) {
        allLessons.forEach((lesson) => {
          lesson.classList.remove('selected-lesson');    
        });
      }
  
      caret.classList.toggle('.caret-rotate'); 
    });
  
  
    allLessons.forEach((lesson) => {
      lesson.addEventListener('click', (data) => {
        allLessons.forEach((item) => {
          item.classList.remove('selected-lesson');
          // caret.classList.toggle('.caret-rotate');
        });
  
        const videoId = data.currentTarget.getAttribute('data-id');
        const videoTitle = data.currentTarget.getAttribute('data-title');
        lesson.classList.add('selected-lesson');
  
        showVideo(videoId, videoTitle);
      });
  
    });

});
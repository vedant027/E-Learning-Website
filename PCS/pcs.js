// ============================== NAVBAR ==================================

// change navbar styles on scroll

window.addEventListener('scroll', () => {
  document.querySelector('nav').classList.toggle
    ('window-scroll', window.scrollY > 0)
})


// ============================== DROPDOWN =================================
const videoPlayer = document.querySelector("iframe");

const videoTitle = document.querySelector('.video-title');

const list = document.querySelector('.module-list');
// const videoTitle = document.queryselector('.videoTitle');
console.log('data------:', list);

list.addEventListener('click', (data) => {
  console.log('data------:', data.target);
  const videoId = data.target.getAttribute('data-id');
  console.log('data------:', videoId);

  const title = data.target.getAttribute('data-title'); 
  let videoUrl = `https://www.youtube.com/embed/${videoId}?rel=0`;
  videoPlayer.setAttribute("src", videoUrl);

  videoTitle.innerHTML = title;
});

// const dropdowns = document.querySelectorAll('.dropdown');
// //Loop through all dropdown elements
// dropdowns.forEach(dropdown => {
//   //Get inner elements from each dropdown
//   const select = dropdown.querySelector('.select');
//   const caret = dropdown.querySelector('.caret');
//   const menu = dropdown.querySelector('.menu');
//   const options = dropdown.querySelectorAll('.menu li');
//   const selected = dropdown.querySelectorAll('.selected');



//   //Add a click event to the select element
//   select.addEventListener('click', () => {
//     //Add the clicked select styles to the select element
//     select.classList.toggle('select-clicked');
//     //Add the rotate styles to the caret element
//     caret.classList.toggle('caret-rotate');
//     //Add the open styles to the menu element
//     menu.classList.toggle('menu-open');
//   });


//   //Loop through all option elements
//   options.forEach(option => {
//     //Add a click event to the option element
//     option.addEventListener('click', () => {
//       //Change selected inner text to clicked option inner text
//       selected.innerText = option.innerText;
//       select.classList.remove('select-clicked');
//       //Add the rotate styles to the caret element
//       caret.classList.remove('caret-rotate');
//       //Add the open styles to the menu element
//       menu.classList.remove('menu-open');
//       //Remove active class from all option elements
//       options.forEach(option => {
//         option.classList.remove('active');
//       });
//       //Add active class to clicked option element
//       option.classList.add('active');
//     });
//   });
// });


// ================================== Video Section ================================ 


// const showVideo = (videoId, title) => {
//   let videoUrl = `https://www.youtube.com/embed/${videoId}?rel=0`;
//   videoPlayer.setAttribute("src", videoUrl);
//   videoTitle.innerHTML = title;
//   showVideo(v.dataset.title);
// };

// dropdownMenu.forEach((v) => {
//   v.addEventListener("click", () => {
//     showVideo(v.dataset.id);
//   });
// });

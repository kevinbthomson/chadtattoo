document.addEventListener('DOMContentLoaded', () => {

  // w/o jQuery/Bootstrap JS NavBAr Toggle
  // const navBarBtn = document.querySelector('.navbar-toggler');
  // const navBar = document.querySelector('#navbar-content');

  // navBarBtn.addEventListener('click', () => {
  //   navBar.classList.toggle('show');
  // });

  // Homepage INstaGrams
  instafetch.init({
    accessToken: '30999166.1677ed0.8132383d871a42449d60730d69938342',
    target: 'instas',
    numOfPics: 4,
    caption: true
  });

});// /DOMcontentLoaded
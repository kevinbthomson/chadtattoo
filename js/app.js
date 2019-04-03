document.addEventListener('DOMContentLoaded', () => {

  // w/o jQuery/Bootstrap JS NavBAr Toggle
  // const navBarBtn = document.querySelector('.navbar-toggler');
  // const navBar = document.querySelector('#navbar-content');

  // navBarBtn.addEventListener('click', () => {
  //   navBar.classList.toggle('show');
  // });

  // Homepage INstaGrams
  instafetch.init({
    accessToken: '303559480.1677ed0.d1d04d9c97f24330af383e66c7a77451',
    target: 'instas',
    numOfPics: 4,
    caption: true
  });

});// /DOMcontentLoaded
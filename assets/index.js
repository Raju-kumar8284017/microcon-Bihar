
AOS.init({
     duration: 2000
  });

/* --------------nav-----color ---yoffset-------------------- */

  let nav = document.querySelector('.navbar');
  /* let brand = document.querySelector('.IAMM_LOGO');
  let logo = document.querySelector('.NSMCH_logo');
  let logo2 = document.querySelector('.IAMM-logo-2');
  let social_link_head = document.querySelector('.social-link-head'); */

  window.addEventListener('scroll', function () {
     if (this.pageYOffset >100) {
       nav.style.backgroundColor = "white";
       /* brand.style.display = "none";
       logo.style.display = "none";
       logo2.style.display = "none";
       social_link_head.style.display = "none"; */
     }
     else{
      nav.style.backgroundColor = '';
      /* brand.style.display = "block";
      logo.style.display = "block";
      logo2.style.display = "block";
      social_link_head.style.display = "block"; */
    }
  })

  window.addEventListener('scroll', function () {
    let navUp = this.document.querySelector('#nav_up');
    if (this.pageYOffset >300) {
        navUp.classList.remove('nav-up');
    }
    else{
      navUp.classList.add('nav-up');
   }
 })
 

  /* ----------go top button-------------- */

    let btnTop = document.querySelector('.top');

    window.addEventListener('scroll', ()=>{
      if (this.pageYOffset < 300) {
        btnTop.style.display = "none";
      }
      else{
        btnTop.style.display = "block";
      }
    })

    btnTop.addEventListener('click', function () {
       window.scrollTo({
          top: 0,
          behavior: "smooth"
       })
    })


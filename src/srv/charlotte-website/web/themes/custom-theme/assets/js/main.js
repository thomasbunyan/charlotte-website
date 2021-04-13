const updateActive = (activeElem) => {
  const x = $('.gallery-cat-button');

  $.each(x, (index, e) => {
    if($(e).attr('active') !== undefined){
      $(e).removeAttr('active')
      return false;
    }
  });

  activeElem.target.setAttribute('active', '');
}

const configureCategories = () => {
  $('.gallery-cat-button').click((e) => {
    const newActive = e.target.getAttribute('data-category');
    updateActive(e);

    const posts = $('.gallery-body').children();
    $.each(posts, (index, e) => {
      const postCategories = $(e).attr('categories').split(',');
      if (!postCategories.includes(newActive) && newActive !== 'all'){
        $(e).hide(400);
      } else {
        $(e).show(400);
      }
    });
  });
}

const moreButton = () => {
  const arrow = $('.more-arrow');
  const galleryNav = $('.gallery-nav');
  const showArrow = Math.abs(galleryNav.width() - galleryNav.prop('scrollWidth')) > 1;

  if (showArrow) {
    arrow.show();
  } else {
    arrow.hide();
  }

  arrow.click((e) => {
    galleryNav.animate({
      scrollLeft: "+=200px"
    }, 200);
  });
}

const gallery = () => {
  configureCategories();
  moreButton();
}

$(() => {
  console.log(
    `
 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⣶⣄⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⣦⣄⣀⡀⣠⣾⡇⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠿⢿⣿⣿⡇⠀⠀⠀⠀
⠀⣶⣿⣦⣜⣿⣿⣿⡟⠻⣿⣿⣿⣿⣿⣿⣿⡿⢿⡏⣴⣺⣦⣙⣿⣷⣄⠀⠀⠀
⠀⣯⡇⣻⣿⣿⣿⣿⣷⣾⣿⣬⣥⣭⣽⣿⣿⣧⣼⡇⣯⣇⣹⣿⣿⣿⣿⣧⠀⠀
⠀⠹⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠸⣿⣿⣿⣿⣿⣿⣿⣷
    `
  );

  gallery();

});
export const setUp = () => {

  lazyLoad();

}

const lazyLoad = () => {
  const posts = $('.gallery-post > a > img');
  posts.each((index, obj) => {
    const img = $(obj),
    imgCreatedWithJS = $('<img src="' + img.attr('data-src') + '">');
  
    imgCreatedWithJS
      .on('load', () => {
        img.attr('src', img.attr('data-src'));
      });
  });
}

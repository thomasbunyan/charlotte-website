const swapImageSource = (element) => {
  const img = $(element),
  imgCreatedWithJS = $('<img src="' + img.attr('data-src') + '">');

  imgCreatedWithJS.on('load', () => {
    img.attr('src', img.attr('data-src'));
    AOS.refresh();
  });
}

export {swapImageSource};

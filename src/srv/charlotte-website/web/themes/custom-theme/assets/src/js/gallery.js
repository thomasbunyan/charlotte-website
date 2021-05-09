import {swapImageSource} from "./common";

const lazyLoad = () => {
  const posts = $('.gallery-post > a > img');
  posts.each((index, element) => {
    swapImageSource(element)
  });
  
}

export const setUp = () => {

  lazyLoad();

}

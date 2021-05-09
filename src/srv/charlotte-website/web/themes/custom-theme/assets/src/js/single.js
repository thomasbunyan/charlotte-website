import {swapImageSource} from "./common";

const lazyLoad = () => {
  
  const element = $(".post-page > .post-wrapper > img");
  swapImageSource(element);
  
}

export const setUp = () => {

  lazyLoad();

}

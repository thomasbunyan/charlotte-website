const copyEmail = () => {
  let animationClassName = "animate__animated animate__bounceIn";
  
  let timeoutHandle;
  $('#email').click(() => {
    copyElementText($('#email'));
    
    let anim = $('#email').removeClass(animationClassName);
    setTimeout(() => {
      anim.addClass(animationClassName);
    }, 10);
    window.clearTimeout(timeoutHandle);
    timeoutHandle = window.setTimeout(() => {
      $('#email').removeClass(animationClassName)
    }, 1000);
  });
}

const copyElementText = (element) => {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

export const setUp = () => {
  
  copyEmail();

}

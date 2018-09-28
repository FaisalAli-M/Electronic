var imgy=document.getElementsByTagName('img'),
    count=0,
    isAnimate = false,
    s;
imgy[count].style.left = "0";
function update(to) {
  s = setTimeout(function () {
    to();
  }, 3000);
}
update(left);
function left() {
  if (isAnimate) {return; }
  isAnimate = true;
  clearTimeout(s);
  var thisImg = imgy[count];
  if (count < imgy.length - 1) {
    count += 1;
  } else {
    count = 0;
  }
  var nextImg = imgy[count];
  nextImg.style.left = "100%";
  setTimeout(function () {
    thisImg.setAttribute("class", "img-transition");
    nextImg.setAttribute("class", "img-transition");
    thisImg.style.left = "-100%";
    nextImg.style.left = "0";
    setTimeout(function () {
      thisImg.setAttribute("class", "");
      nextImg.setAttribute("class", "");
      isAnimate = false;
      update(left);
    }, 1000);
  }, 0);
}
function right(){
  if (isAnimate) {return; }
  isAnimate = true;
  clearTimeout(s);
  var thisImg = imgy[count];
  if (count > 0) {
    count -= 1;
  } else {
    count = imgy.length - 1;
  }
  var lastImg = imgy[count];
  lastImg.style.left = "-100%";
  setTimeout(function () {
    thisImg.setAttribute("class", "img-transition");
    lastImg.setAttribute("class", "img-transition");
    thisImg.style.left = "100%";
    lastImg.style.left = "0";
    setTimeout(function () {
      thisImg.setAttribute("class", "");
      lastImg.setAttribute("class", "");
      isAnimate = false;
      update(right);
    }, 1000);
  }, 0);
}
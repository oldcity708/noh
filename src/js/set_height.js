function isSmartPhone() {
  if (navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
    return true;
  } else {
    return false;
  }
}


const setHeight = () => {
  var height = window.innerHeight;
  document.documentElement.style.setProperty('--vh', height / 100 + 'px');
}

window.addEventListener('load', setHeight, false);
if (!isSmartPhone()) {
  window.addEventListener('resize', setHeight, false);
}

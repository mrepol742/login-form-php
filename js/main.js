let isDev = true;

bg("night", false);

const observer = lozad();
observer.observe();

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('../login/sw.js').then((reg) => {
      console.log('[ServiceWorker] Registered');
    }).catch((err) => {
      console.error('[ServiceWorker] failed: ', err)
    });
}

function bg(url, isO) {
  if (isDev && isO) {
    document.body.style.background = "url('img/bg" + getRndInteger(1, 13) + ".jpg') no-repeat fixed center";
  } else if (isDev && !isO) {
     document.body.style.background = "url('img/bg" + getRndInteger(1, 13) + ".jpg') no-repeat fixed center";
  } else {
    document.body.style.background = "url('https://source.unsplash.com/720x1080?" + url + "') no-repeat fixed center";
  } 
  document.body.style.backgroundSize = "cover";
}

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min) ) + min;
}

const cursor = document.querySelector(".cursor");
    var timeout;

    document.addEventListener("mousemove", (e) => {
      let x = e.pageX;
      let y = e.pageY;

      cursor.style.top = y + "px";
      cursor.style.left = x + "px";
      cursor.style.display = "block";

      function mouseStopped(){
        cursor.style.display = "none";
      }
      clearTimeout(timeout);
      timeout = setTimeout(mouseStopped, 5000);  
    });

    document.addEventListener("mouseout", () => {
      cursor.style.display = "none";
    });
let isDev = false;

bg("");

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('../sw.js').then((reg) => {
      console.log('[ServiceWorker] Registered');
    }).catch((err) => {
      console.error('[ServiceWorker] failed: ', err)
    });
}

other.addEventListener("click", () => {
  bg("lgbt");
  male.addEventListener("click", () => {
    bg("");
  });
  fmale.addEventListener("click", () => {
    bg("");
  });
});

function bg(url) {
  if (isDev) {
    document.body.style.background = "url('img/bg.jpg') no-repeat fixed center";
  } else {
    document.body.style.background = "url('https://source.unsplash.com/720x1080?" + url + "') no-repeat fixed center";
  } 
  document.body.style.backgroundSize = "cover";
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
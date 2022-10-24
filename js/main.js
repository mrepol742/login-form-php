//document.body.style.background = "url('https://source.unsplash.com/720x1080') no-repeat fixed center";
document.body.style.background = "url('img/bg.jpg') no-repeat fixed center";
document.body.style.backgroundSize = "cover";

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('../sw.js').then((reg) => {
      console.log('[ServiceWorker] Registered');
    }).catch((err) => {
      console.error('[ServiceWorker] failed: ', err)
    });
}


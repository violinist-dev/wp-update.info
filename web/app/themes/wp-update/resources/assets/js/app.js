require('./bootstrap')

import Barba from 'barba.js'

Barba.Pjax.start()
Barba.Prefetch.init()

window.addEventListener('load', () => {
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js').
      then((reg) => {
        console.log('ServiceWorker registered')
      }).
      catch((error) => {
        console.warn('ServiceWorker error', error)
      })
  }
})

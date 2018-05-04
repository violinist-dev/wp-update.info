require('./bootstrap')

import Barba from 'barba.js'

Barba.Pjax.start()
Barba.Prefetch.init()

require('./sw')

require('./bootstrap')

import Barba from 'barba.js'

Barba.Pjax.start()
Barba.Prefetch.init()

import * as OfflinePluginRuntime from "offline-plugin/runtime";
OfflinePluginRuntime.install();

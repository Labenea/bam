
require('./bootstrap');
require('./admin.js');

import AOS from 'aos';
import 'bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
AOS.init();

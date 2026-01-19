import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import './sidebar-menu.js';
import './mobile-menu.js';
import './calendar-widget.js';

import GLightbox from 'glightbox';

// Initialize GLightbox
const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true,
    selector: '.glightbox'
});

console.log('ETF UNSA Design System Loaded');

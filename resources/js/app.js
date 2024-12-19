import './bootstrap';

import { livewire_hot_reload } from 'virtual:livewire-hot-reload'
livewire_hot_reload();



// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

window.Swiper=Swiper;
window.Navigation=Navigation;
window.Pagination=Pagination;

// import Swiper and modules styles
import 'swiper/css';
//import 'swiper/css/navigation';
import 'swiper/css/pagination';


import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

Alpine.plugin(focus);

window.Alpine = Alpine;
Alpine.start();
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



$(':radio').change(function() {
    console.log('New star rating: ' + this.value);
  });

 
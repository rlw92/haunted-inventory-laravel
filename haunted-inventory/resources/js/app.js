import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const srchbr = document.getElementById("searchbar")

document.getElementById("searchBtn").addEventListener("click",function(){
  srchbr.style.display = "flex";
  srchbr.scrollIntoView();
})
document.getElementById("searchBtntwo").addEventListener("click",function(){
  srchbr.style.display = "flex";
srchbr.scrollIntoView();})
document.getElementById("srchClose").addEventListener("click",function(){srchbr.style.display = "none";})

$(':radio').change(function() {
    console.log('New star rating: ' + this.value);
  });


 
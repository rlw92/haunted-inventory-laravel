import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const srchbr = document.getElementById("searchbar")

/*Search bar display*/ 
document.getElementById("searchBtn").addEventListener("click",function(){
  srchbr.style.display = "flex";
  srchbr.scrollIntoView();
})
document.getElementById("searchBtntwo").addEventListener("click",function(){
  srchbr.style.display = "flex";
srchbr.scrollIntoView();})
document.getElementById("srchClose").addEventListener("click",function(){srchbr.style.display = "none";})

/*Dropdown Functionality */

let drpcnt = document.getElementById("dpdCnt");
document.getElementById('dpdBtn').addEventListener('click', dpdDown)
let ShwDrpdwn = 1;
function dpdDown(){  
if(ShwDrpdwn === 1){

  drpcnt.style.display = "flex";
 ShwDrpdwn=2;
}

else if(ShwDrpdwn === 2){
  
    drpcnt.style.display = "none";
    ShwDrpdwn=1;
}
}




/*star rating display*/
$(':radio').change(function() {
    console.log('New star rating: ' + this.value);
  });


 
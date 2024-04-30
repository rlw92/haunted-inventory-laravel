import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


/*side Menu functionality*/
let prflBtn = document.getElementById('prflBtn');
let sdmnu = document.getElementById('sideMenu');

prflBtn.addEventListener('click', function(){
  sdmnu.style.width = "40vw";
  console.log("hi");
  
  })

let clsBtn = document.getElementById("clsBtn")
 
clsBtn.addEventListener('click', function(){
  sdmnu.style.width = "0";
  
})


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

/* Mobile Drop down functionality */

let drpMcnt = document.getElementById("myModal");
document.getElementById('dpdmBtn').addEventListener('click', dpdmDown)
document.getElementById('xBtn').addEventListener('click', dpdmDown)
let ShwMDrpdwn = 1;

function dpdmDown(){  
if(ShwMDrpdwn === 1){

  drpMcnt.style.display = "flex";
  document.getElementById("header").scrollIntoView();
 ShwMDrpdwn=2;
}

else if(ShwMDrpdwn === 2){
  
    drpMcnt.style.display = "none";
    ShwMDrpdwn=1;
}
}





/*star rating display*/
$(':radio').change(function() {
    console.log('New star rating: ' + this.value);
  });


 
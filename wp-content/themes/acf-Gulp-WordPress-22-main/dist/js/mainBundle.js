function about(){if(document.querySelector("#about")){console.log("about*************");var e=document.querySelectorAll(".about_item"),o=document.querySelector(".btn_next");const a=Array.from(e),c=e.length;let t=1;a[0].classList.add("active"),o.addEventListener("click",e=>{e.preventDefault(),console.log("click",t,c),t>c-1&&(t=0),a.map(e=>e.classList.remove("active")),a[t].classList.add("active"),t++})}}"loading"!==document.readyState?about():document.addEventListener("DOMContentLoaded",()=>about());
function accessibility(){console.log("accessibility ON"),document.querySelectorAll(".read-this").forEach(e=>{e.setAttribute("tabindex","0")}),document.querySelectorAll(".readThis").forEach(e=>{e.setAttribute("tabindex","0")}),document.querySelector("#services")&&(document.onkeydown=tabListener)}function tabListener(e){(e=e||event||null).keyCode}"loading"!==document.readyState?accessibility():document.addEventListener("DOMContentLoaded",()=>accessibility());
"loading"!==document.readyState?internal():document.addEventListener("DOMContentLoaded",()=>internal());let current_page="",postsDiv="";function internal(){if(console.log("intern 1"),document.querySelector("#add_property")){console.log("add_property 1");const e=document.getElementById("fetchButton");document.getElementById("result");e.addEventListener("click",()=>startFetchbyDate(e))}}function startFetchbyDate(t){t.disabled=!0,fetch(ajaxurl+"?action=my_custom_fetch").then(e=>e.json()).then(e=>{e.success?result.innerHTML=`<pre>${e.data}</pre>`:result.innerHTML="An error occurred: "+e.data,t.disabled=!1}).catch(e=>{console.error("Error:",e),result.innerHTML="An error occurred while fetching data.",t.disabled=!1})}
document.addEventListener("DOMContentLoaded",()=>{if(document.querySelector("#searchformtop")){var e=document.querySelector(".searchform__btn");const t=document.querySelector(".searchform__input");e.addEventListener("click",e=>{e.preventDefault(),console.log(t,"searchinput"),t.classList.toggle("extend"),console.log(t.value,"value"),t.classList.contains("extend")?t.setAttribute("tabindex","0"):t.setAttribute("tabindex","-1"),t.value&&(window.location.href="/?s="+t.value),t.value=""})}});
"loading"!==document.readyState?ourWork():document.addEventListener("DOMContentLoaded",()=>ourWork());let submenu=""["submenu"];function ourWork(){var e;document.querySelector("#our-work")&&(console.log("our-work"),setMenuToActive(),submenu=document.querySelector(".submenu"),document.querySelector(".our-work")&&submenu.addEventListener("click",e=>openMenu(e)),e=submenu.querySelectorAll("button"),(buttonsArr=[...e]).forEach(e=>e.addEventListener("click",e=>sendDataToUrl(e))))}function openMenu(e){submenu.classList.contains("hide")?submenu.setAttribute("aria-expanded","true"):submenu.setAttribute("aria-expanded","false"),submenu.classList.toggle("hide")}function sendDataToUrl(e){let t="",o=e.target.dataset.name;o=(o=o.replace(" & ","-")).toLowerCase(),console.log(o,"term"),t="all"===e.target.dataset.name?"/our-work/":"?terms="+o,console.log(t,"url"),window.location.href=t}function setMenuToActive(){let e="";submenu=document.querySelector(".submenu"),window.location.search?(e=(e=window.location.search).replace("?terms=",""),document.querySelector("."+e).classList.add("active")):submenu.querySelectorAll(".active").forEach(e=>e.classList.remove("active"))}


document.addEventListener("DOMContentLoaded",()=>{let o,t=10;if(document.querySelector("#main-menu-top")){const d=document.querySelector("#main-menu-top");let e=d.offsetHeight/2;document.querySelector("#main-menu-top")&&window.addEventListener("scroll",([n,i=10,l=!0]=[function(){o=window.scrollY,window.scrollY>=e&&(d.classList.add("fixed-top"),t=30),window.scrollY<=e&&d.classList.remove("fixed-top"),window.scrollY<=500&&(t=10)},t],function(){var e=this,o=arguments,t=l&&!c;clearTimeout(c),c=setTimeout(function(){c=null,l||n.apply(e,o)},i),t&&n.apply(e,o)}))}var n,i,l,c});
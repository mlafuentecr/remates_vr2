function block_tech_stack(){let a=document.querySelectorAll(".tech_stack_btn");a.forEach(t=>t.addEventListener("click",t=>{var e,c;e=t,console.log(e.target.dataset.cat),c=document.querySelectorAll(".tech_stack-logos"),(c=Array.from(c)).forEach(t=>t.classList.add("d-none")),(showDiv=document.querySelector(".wrapper-"+e.target.dataset.cat)).classList.remove("d-none"),c=t,Array.from(a).forEach(t=>t.classList.remove("active")),c.target.classList.add("active")}))}"loading"!==document.readyState?block_tech_stack():document.addEventListener("DOMContentLoaded",()=>block_tech_stack());
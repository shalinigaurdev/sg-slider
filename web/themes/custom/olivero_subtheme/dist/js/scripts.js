jQuery,Drupal.behaviors.slider={attach:function(e){document.addEventListener("DOMContentLoaded",function(){let t=document.querySelectorAll(".tab"),n=document.querySelectorAll(".slide"),i=document.querySelector(".slider"),c=document.querySelectorAll(".pagination-dot");var e=document.querySelector(".prev"),o=document.querySelector(".next");let a=0,r=n.length,d=n[0].offsetWidth+parseInt(getComputedStyle(n[0]).marginRight);var s=n[0].cloneNode(!0),l=n[n.length-1].cloneNode(!0);function u(e){t.forEach(e=>e.classList.remove("active")),t[e%r].classList.add("active")}function v(e){i.style.transform=`translateX(-${(e+1)*d}px)`,c.forEach(e=>e.classList.remove("active")),c[e%r]&&c[e%r].classList.add("active"),n.forEach(e=>e.classList.remove("active")),n[(e+1)%r].classList.add("active")}i.appendChild(s),i.insertBefore(l,n[0]),t.forEach((e,t)=>{e.addEventListener("click",function(){u(a=t),v(a)})}),c.forEach((e,t)=>{e.addEventListener("click",function(){u(a=t),v(a)})}),e.addEventListener("click",function(){u(a=(a-1+r)%r),v(a)}),o.addEventListener("click",function(){u(a=(a+1)%r),v(a)}),u(a),v(a),window.addEventListener("resize",function(){v(a)}),i.addEventListener("transitionend",function(){a===r&&(a=0,i.style.transition="none",v(a)),-1===a&&(a=r-1,i.style.transition="none",v(a))})})}};
//# sourceMappingURL=scripts.js.map
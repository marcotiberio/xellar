import{N as i,A as n,a as s,S as p}from"./swiper-bundle.min-800ce7a7.js";import{b as r,g as l}from"./helpers-0bb72b7a.js";function c(t){const o=r(t),a=l(t),e=u(o,a);return()=>e.destroy()}function u(t,o){const{options:a}=o,e={modules:[i,n,s],a11y:a.a11y,slidesPerView:1,spaceBetween:0,navigation:{nextEl:t.next,prevEl:t.prev}};return a.autoplay&&a.autoplaySpeed&&(e.autoplay={delay:a.autoplaySpeed}),new p(t.slider,e)}export{c as default};
import{N as i,A as n,a as s,S as p}from"./swiper-bundle.min-800ce7a7.js";import{b as r,g as l}from"./helpers-0bb72b7a.js";function c(a){const o=r(a),t=l(a),e=u(o,t);return()=>e.destroy()}function u(a,o){const{options:t}=o,e={modules:[i,n,s],a11y:t.a11y,slidesPerView:1,spaceBetween:0,navigation:{nextEl:a.next,prevEl:a.prev}};return t.autoplay&&t.autoplaySpeed&&(e.autoplay={delay:t.autoplaySpeed}),new p(a.slider,e)}export{c as default};
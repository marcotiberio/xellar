import{S as o,N as n,A as s,a as p}from"./swiper-bundle.min-800ce7a7.js";import{P as l}from"./pagination-b06a4581.js";import{b as r,g as u}from"./helpers-0bb72b7a.js";o.use([n,s,p,l]);function f(a){const i=r(a),t=u(a),e=c(i,t);return()=>e.destroy()}function c(a,i){const{options:t}=i,e={modules:[n,s,p],a11y:t.a11y,slidesPerView:1,spaceBetween:50,pagination:{el:a.pagination,type:"bullets",clickable:!0},navigation:{nextEl:a.next,prevEl:a.prev}};return t.autoplay&&t.autoplaySpeed&&(e.autoplay={delay:t.autoplaySpeed}),new o(a.slider,e)}export{f as default};

import{N as i,A as n,a as s,S as p}from"./swiper-bundle.min-800ce7a7.js";import{P as r}from"./pagination-b06a4581.js";import{b as l,g as u}from"./helpers-0bb72b7a.js";function f(a){const o=l(a),t=u(a),e=c(o,t);return()=>e.destroy()}function c(a,o){const{options:t}=o,e={modules:[i,n,s,r],a11y:t.a11y,slidesPerView:"auto",spaceBetween:0,pagination:{el:a.pagination,type:"bullets",clickable:!0},navigation:{nextEl:a.next,prevEl:a.prev}};return t.autoplay&&t.autoplaySpeed&&(e.autoplay={delay:t.autoplaySpeed}),new p(a.slider,e)}export{f as default};

import{m as S,n as m,p as j,d as N,o as z,b as E,c as W,e as d,u,i as B,f as a,q as M,h as V,t as $,F as q,l as I}from"./app-DagwBYk0.js";/* empty css            *//**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const p=e=>e==="";/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const T=(...e)=>e.filter((o,s,t)=>!!o&&o.trim()!==""&&t.indexOf(o)===s).join(" ").trim();/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const f=e=>e.replace(/([a-z0-9])([A-Z])/g,"$1-$2").toLowerCase();/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const D=e=>e.replace(/^([A-Z])|[\s-_]+(\w)/g,(o,s,t)=>t?t.toUpperCase():s.toLowerCase());/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const F=e=>{const o=D(e);return o.charAt(0).toUpperCase()+o.slice(1)};/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */var n={xmlns:"http://www.w3.org/2000/svg",width:24,height:24,viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":2,"stroke-linecap":"round","stroke-linejoin":"round"};/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const H=Symbol("lucide-icons");function U(){return S(H,{})}/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const O=({name:e,iconNode:o,"icon-node":s,absoluteStrokeWidth:t,"absolute-stroke-width":r,strokeWidth:w,"stroke-width":b,size:l,color:k,...v},{slots:x})=>{const{size:i,color:y,strokeWidth:C=2,absoluteStrokeWidth:_=!1,class:A=""}=U(),L=j(()=>{const c=p(t)||p(r)||t===!0||r===!0||_===!0,h=w||b||C||n["stroke-width"];return c?Number(h)*24/Number(l??i??n.width):h});return m("svg",{...n,...v,width:l??i??n.width,height:l??i??n.height,stroke:k??y??n.stroke,"stroke-width":L.value,class:T("lucide",A,...e?[`lucide-${f(F(e))}-icon`,`lucide-${f(e)}`]:["lucide-icon"])},[...(o??s??[]).map(c=>m(...c)),...x.default?[x.default()]:[]])};/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const g=(e,o)=>(s,{slots:t,attrs:r})=>m(O,{...r,...s,iconNode:o,name:e},t.default?{default:t.default}:void 0);/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const P=[["path",{d:"m15 12-9.373 9.373a1 1 0 0 1-3.001-3L12 9",key:"1hayfq"}],["path",{d:"m18 15 4-4",key:"16gjal"}],["path",{d:"m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172v-.344a2 2 0 0 0-.586-1.414l-1.657-1.657A6 6 0 0 0 12.516 3H9l1.243 1.243A6 6 0 0 1 12 8.485V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5",key:"15ts47"}]],Z=g("hammer",P);/**
 * @license @lucide/vue v1.34.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const X=[["path",{d:"m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7",key:"132q7q"}],["rect",{x:"2",y:"4",width:"20",height:"16",rx:"2",key:"izxlao"}]],Y=g("mail",X),G={class:"relative min-h-screen bg-neutral-950 flex flex-col items-center justify-center font-sans text-neutral-100 selection:bg-orange-500 selection:text-white px-6"},J={class:"mb-8 p-4 bg-white/5 rounded-2xl border border-white/10 shadow-xl backdrop-blur-sm"},K={class:"flex flex-col items-center text-sm text-neutral-500 gap-2"},Q={href:"mailto:contacto@mih.cl",class:"flex items-center gap-2 hover:text-orange-400 transition-colors"},R={class:"absolute bottom-8 w-full text-center text-xs text-neutral-600"},ot=N({__name:"Welcome",setup(e){const o=I(!1);return z(()=>{setTimeout(()=>{o.value=!0},100)}),(s,t)=>(E(),W(q,null,[d(u(B),{title:"Sitio en Mantenimiento"}),a("div",G,[t[5]||(t[5]=a("div",{class:"absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-neutral-900 via-neutral-950 to-neutral-950"},null,-1)),a("main",{class:M(["relative z-10 w-full max-w-2xl mx-auto flex flex-col items-center justify-center text-center transition-all duration-1000 ease-out",[o.value?"opacity-100 translate-y-0":"opacity-0 translate-y-8"]])},[a("div",J,[d(u(Z),{class:"w-8 h-8 text-orange-400"})]),t[2]||(t[2]=a("h1",{class:"text-4xl md:text-5xl font-semibold tracking-tight mb-6 text-white"}," Sitio en Mantenimiento ",-1)),t[3]||(t[3]=a("p",{class:"text-lg text-neutral-400 max-w-md mx-auto mb-12 font-light leading-relaxed"}," Estamos realizando mejoras en nuestra plataforma para brindarte un mejor servicio. Estaremos de vuelta muy pronto. ",-1)),t[4]||(t[4]=a("div",{class:"h-px w-16 bg-neutral-800 mb-12"},null,-1)),a("div",K,[t[1]||(t[1]=a("p",null,"¿Necesitas ayuda urgente?",-1)),a("a",Q,[d(u(Y),{class:"w-4 h-4"}),t[0]||(t[0]=V(" contacto@mih.cl ",-1))])])],2),a("div",R," © "+$(new Date().getFullYear())+" MIH ",1)])],64))}});export{ot as default};

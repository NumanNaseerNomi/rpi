(this.webpackJsonpshowroom=this.webpackJsonpshowroom||[]).push([[0],{209:function(e,t,a){"use strict";a.r(t);var n=a(0),r=a.n(n),c=a(13),l=a.n(c),o=(a(86),a(87),a(88),a(33)),s=a(9),u=a(19),i=a(5),m={config:{}},f=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:m,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"ADD_CONFIG":return Object(i.a)(Object(i.a)({},e),{},{config:t.value});default:return e}},p=function(e){return{type:"UPDATE_VARIANT",value:e}},b=function(e){return{type:"UPDATE_COLOR",value:e}},d=function(e){return{type:"UPDATE_WHEEL",value:e}},O=function(e){return{type:"UPDATE_ANGLE",value:e}},E=function(e){return{type:"UPDATE_SPOILERS",value:e}},j={angle:4,rareUpperSpoiler:!1,rareUnderSpoiler:!1,sideSpoiler:!1,frontSpoiler:!1,otherOptions:{}},h=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:j,t=arguments.length>1?arguments[1]:void 0;switch(console.log("state",t.type),console.log(e),t.type){case"UPDATE_VARIANT":return Object(i.a)(Object(i.a)({},e),{},{variant:t.value});case"UPDATE_COLOR":return Object(i.a)(Object(i.a)({},e),{},{color:t.value});case"UPDATE_WHEEL":return Object(i.a)(Object(i.a)({},e),{},{wheel:t.value});case"UPDATE_ANGLE":return Object(i.a)(Object(i.a)({},e),{},{angle:t.value});case"UPDATE_RARE_UPPER_SPOILER":return Object(i.a)(Object(i.a)({},e),{},{rareUpperSpoiler:t.value});case"UPDATE_RARE_UNDER_SPOILER":return Object(i.a)(Object(i.a)({},e),{},{rareUnderSpoiler:t.value});case"UPDATE_SIDE_SPOILER":return console.log(t.value),Object(i.a)(Object(i.a)({},e),{},{sideSpoiler:t.value});case"UPDATE_FRONT_SPOILER":return Object(i.a)(Object(i.a)({},e),{},{frontSpoiler:t.value});case"UPDATE_OTHER_OPTION":return Object(i.a)(Object(i.a)({},e),{},{otherOptions:t.value});case"UPDATE_BASEPATH":return Object(i.a)(Object(i.a)({},e),{},{basePath:t.value});case"UPDATE_VARIANT_STATINGFROM":return Object(i.a)(Object(i.a)({},e),{},{variantStartingFrom:t.value});case"UPDATE_SPOILERS":return Object(i.a)(Object(i.a)({},e),{},{spoilers:t.value});default:return e}},v=Object(u.b)({config:f,carState:h}),g=Object(u.c)(v),S=a(6),x=a(14),N=a.n(x),w=a(20),y=a(2),A=a(18),T=a(80),_=Object(n.createContext)(),P=function(e){var t=Object(n.useState)(0),a=Object(y.a)(t,2),c=a[0],l=a[1];return r.a.createElement(_.Provider,{value:[c,l]},e.children)},U=(a(94),r.a.memo((function(e){var t=e.i,a=e.angle,c=e.variant,l=e.color,o=e.wheel,s=e.otherOptions,u=(e.rareUnderSpoiler,e.rareUpperSpoiler,e.sideSpoiler,e.frontSpoiler,e.basePath),i=(e.startingFrom,e.spoilers),m=Object(n.useState)(0),f=Object(y.a)(m,2),p=f[0],b=f[1],d=Object(n.useContext)(_),O=Object(y.a)(d,2),E=O[0],j=(O[1],Object(n.useState)(!1)),h=Object(y.a)(j,2),v=h[0],g=h[1],S=Object(n.useState)(!1),x=Object(y.a)(S,2),N=x[0],w=x[1];Object(n.useEffect)((function(){console.log("loadState",E)}),[E]),Object(n.useEffect)((function(){c&&g(!0)}),[c,l]),Object(n.useEffect)((function(){c&&w(!0)}),[o]);var P=function(e,t){return Object(T.a)(Function,Object(A.a)(Object.keys(t)).concat(["return `"+e+"`;"])).apply(void 0,Object(A.a)(Object.values(t)))};return r.a.createElement("div",{className:"car-box w-1/2 h-1/2 relative",style:{display:a===t?"":"none"}},v||N?r.a.createElement("div",{className:"flex items-center justify-center fixed inset-0",style:{zIndex:"999999"}},r.a.createElement("img",{className:"w-32 md:w-64",src:"https://i.ibb.co/FBbkxDD/ezgif-6-8fba730900b1.gif"})):"",r.a.createElement("img",{src:function(e){var t=parseInt(e)+parseInt(c.variantStartFrom);t=("0"+t).slice(-2);var a=c.folder,n=c.name,r="".concat(l.folder),o=P("".concat(l.fileName),{variantName:n});return"".concat(u,"/").concat(a,"/").concat(r,"/").concat(o).concat(t,".png")}(t),onLoad:function(e){return g(!1)},className:"w-full absolute left-0 bottom-0"}),r.a.createElement("img",{src:function(e){return e=("0"+(e=e)).slice(-2),"".concat(u,"/shadow/shadow_000").concat(e,".png")}(t),onLoad:function(e){return b(p+1)},className:"w-full absolute left-0 bottom-0"}),r.a.createElement("img",{src:function(e){return e=("0"+(e+=1)).slice(-2),"".concat(u,"/").concat(o.folder,"/").concat(o.folder,"_").concat(e,".png")}(t),onLoad:function(e){return w(!1)},className:"w-full absolute left-0 bottom-0"}),function(e){if(i&&Object.keys(i).length)return Object.keys(i).map((function(t,a){var n;if(i[t]){var c=e;c=("0"+(c=parseInt(c)+parseInt(i[t].startingFrom))).slice(-2),console.log(i[t]);var o=P("".concat(i[t].folder),{colorCode:l.colorCode});return n="".concat(u,"/").concat(o,"/").concat(o,"_").concat(c,".png"),r.a.createElement("img",{key:a,src:n,className:"w-full absolute left-0 bottom-0"})}}))}(t),function(e){if(Object.keys(s).length)return Object.keys(s).map((function(t,a){var n="";if(s[t]){var c=e;if(c=("0"+(c=parseInt(c)+parseInt(s[t].startingFrom))).slice(-2),s[t].reference){var o=s[t].reference;n="".concat(u,"/").concat(l[o],"/").concat(l[o],"_").concat(c,".png")}else if(s[t].folder){var i=P("".concat(s[t].folder),{colorCode:l.colorCode});n="".concat(u,"/").concat(i,"/").concat(i,"_").concat(c,".png")}return r.a.createElement("img",{key:a,src:n,className:"w-full absolute left-0 bottom-0"})}}))}(t))}),(function(e,t){return e.render===t.render}))),k=Object(s.b)(null,{updateangleAction:O})((function(e){var t=Object(s.c)((function(e){return e})).carState,a=Object(n.useState)(0),c=Object(y.a)(a,2),l=c[0],o=c[1],u=Object(n.useState)({}),m=Object(y.a)(u,2),f=m[0],p=m[1],b=Object(n.useState)({}),d=Object(y.a)(b,2),O=d[0],E=d[1],j=Object(n.useState)({}),h=Object(y.a)(j,2),v=h[0],g=h[1],S=Object(n.useState)(!1),x=Object(y.a)(S,2),N=x[0],w=x[1],T=Object(n.useState)(!1),_=Object(y.a)(T,2),k=_[0],D=_[1],I=Object(n.useState)(!1),R=Object(y.a)(I,2),C=R[0],F=R[1],L=Object(n.useState)(!1),V=Object(y.a)(L,2),B=V[0],H=V[1],M=Object(n.useState)([]),W=Object(y.a)(M,2),G=W[0],X=W[1],z=Object(n.useState)([]),J=Object(y.a)(z,2),q=J[0],K=J[1],Q=Object(n.useState)([]),Y=Object(y.a)(Q,2),Z=Y[0],$=Y[1],ee=Object(n.useState)({}),te=Object(y.a)(ee,2),ae=te[0],ne=te[1],re=Object(n.useState)(0),ce=Object(y.a)(re,2),le=ce[0],oe=ce[1],se=Object(n.useState)(0),ue=Object(y.a)(se,2),ie=ue[0],me=ue[1];Object(n.useEffect)((function(){t&&(console.log(t),t.angle&&o(t.angle),t.variant&&E(t.variant),t.color&&g(t.color),t.wheel&&p(t.wheel),t.otherOptions&&X(t.otherOptions),w(t.rareUpperSpoiler),D(t.rareUnderSpoiler),F(t.sideSpoiler),H(t.frontSpoiler),K(t.basePath),$(t.variantStartingFrom),ne(t.spoilers),oe(le+1),fe(Object(i.a)({},t)))}),[t]);var fe=function(e){var t=3;e.rareUpperSpoiler&&(t+=1),e.rareUpperSpoiler&&(t+=1),e.sideSpoiler&&(t+=1),e.frontSpoiler&&(t+=1),t+=Object.keys(e.otherOptions).length,me(t)};return r.a.createElement(P,null,r.a.createElement("div",{className:"car absolute bottom-0 w-full flex justify-center"},Object(A.a)(Array(36)).map((function(e,t){return r.a.createElement(U,{key:t,i:t,angle:l,wheel:f,variant:O,color:v,otherOptions:G,rareUnderSpoiler:k,rareUpperSpoiler:N,sideSpoiler:C,frontSpoiler:B,activeNumOfParts:ie,basePath:q,startingFrom:Z,render:le,spoilers:ae})}))))})),D=(a(95),a(76)),I=a(212),R=(a(190),a(77)),C=Object(s.b)(null,{updateVariantAction:p,updateColorAction:b,updateWheelAction:d,updateRareUpperSpoiler:function(e){return{type:"UPDATE_RARE_UPPER_SPOILER",value:e}},updateRareUnderSpoiler:function(e){return{type:"UPDATE_RARE_UNDER_SPOILER",value:e}},updateSideSpoiler:function(e){return{type:"UPDATE_SIDE_SPOILER",value:e}},updateFrontSpoiler:function(e){return{type:"UPDATE_FRONT_SPOILER",value:e}},updateOtherOptions:function(e){return{type:"UPDATE_OTHER_OPTION",value:e}},updateSpoilers:E})((function(e){var t=e.config;console.log(t);var a=Object(s.c)((function(e){return e})).carState,c=Object(n.useState)([]),l=Object(y.a)(c,2),o=l[0],u=l[1],i=Object(n.useState)([]),m=Object(y.a)(i,2),f=m[0],p=m[1],b=Object(n.useState)([]),d=Object(y.a)(b,2),O=d[0],E=d[1],j=Object(n.useState)([]),h=Object(y.a)(j,2),v=h[0],g=h[1],S=Object(n.useState)([]),x=Object(y.a)(S,2),N=x[0],w=x[1],T=Object(n.useState)(!1),_=Object(y.a)(T,2),P=_[0],U=_[1],k=Object(n.useState)(!1),C=Object(y.a)(k,2),F=(C[0],C[1]),L=Object(n.useState)(!1),V=Object(y.a)(L,2),B=V[0],H=V[1],M=Object(n.useState)(!1),W=Object(y.a)(M,2),G=W[0],X=W[1],z=Object(n.useState)({}),J=Object(y.a)(z,2),q=J[0],K=J[1],Q=Object(n.useState)({}),Y=Object(y.a)(Q,2),Z=Y[0],$=Y[1],ee=Object(n.useState)({}),te=Object(y.a)(ee,2),ae=te[0],ne=te[1],re=Object(n.useState)({}),ce=Object(y.a)(re,2),le=ce[0],oe=ce[1],se=Object(n.useState)({}),ue=Object(y.a)(se,2),ie=ue[0],me=(ue[1],Object(n.useState)(!1)),fe=Object(y.a)(me,2),pe=fe[0],be=fe[1],de=Object(n.useState)(!1),Oe=Object(y.a)(de,2),Ee=Oe[0],je=Oe[1],he=Object(n.useState)({}),ve=Object(y.a)(he,2),ge=ve[0],Se=ve[1];Object(n.useEffect)((function(){t&&t.variants&&u(t.variants),t&&t.colors&&xe(t.colors),t&&t.wheels&&E(t.wheels),t&&t.otherOptions&&g(t.otherOptions),t&&t.spoilers&&w(t.spoilers)}),[t]),Object(n.useEffect)((function(){a&&(a.variant&&$(a.variant),a.color&&ne(a.color),a.wheel&&K(a.wheel),a.otherOptions&&oe(a.otherOptions),U(a.rareUpperSpoiler),F(a.rareUnderSpoiler),X(a.frontSpoiler),H(a.sideSpoiler))}),[a]);var xe=function(e){p(e);var t={},a={};a.backgroundColor=e.map((function(e){return e.colorHash})),a.data=Object(A.a)(Array(e.length)).map((function(t,a){return 360/e.length})),t.labels=e.map((function(e){return e.name})),t.datasets=new Array(a),Se(t),console.log(t)},Ne=function(t){le[t.name]?delete le[t.name]:le[t.name]=t,e.updateOtherOptions(le)};return r.a.createElement("nav",{className:"absolute w-full inset-x-0 bottom-0 md:mb-8 md:mb-16 md:flex md:items-center md:justify-center"},r.a.createElement(I.a,{show:Ee,onHide:function(){return je(!1)},size:"xl"},r.a.createElement(I.a.Header,{closeButton:!0},r.a.createElement(I.a.Title,null,"Interior")),r.a.createElement(I.a.Body,null,r.a.createElement(R.a,{url:"http://suzuki-360-1100.surge.sh/",width:"100%",height:"600px",id:"myId",className:"myClassname",display:"initial",position:"relative"}))),r.a.createElement("ul",{className:"flex space-x-px md:space-x-1 items-center"},r.a.createElement("li",{className:"w-full"},r.a.createElement("button",{className:"h-12 px-3 md:px-10 md:rounded text-white bg-black bg-opacity-75 hover:bg-opacity-100 transition ease-in-out duration-300"},"Exterior")),r.a.createElement("li",{className:"w-full"},r.a.createElement("a",{className:"h-12 md:rounded text-white w-full md:w-12",href:"#"},"Car Type"),r.a.createElement("div",{className:"sub-menu"},r.a.createElement("ul",null,!!o.length&&o.map((function(t,a){return r.a.createElement("li",{key:a,onClick:function(a){return e.updateVariantAction(t)}},Z.name===t.name?r.a.createElement(r.a.Fragment,null,r.a.createElement("i",{className:"fas fa-check-circle",style:{color:"green"}})," "):" ",r.a.createElement("a",{href:"#"},t.name))}))))),r.a.createElement("li",{className:"color-menu w-full"},r.a.createElement("a",{className:"h-12 md:rounded text-white w-full md:w-12",href:"#"},"Spray"),r.a.createElement("div",{className:"sub-menu",style:{height:"150px",width:"274px",top:"-150px",left:"-112px",background:"none"}},function(t){return console.log(t),r.a.createElement(r.a.Fragment,null,r.a.createElement(D.Doughnut,{data:t,options:{legend:{display:!1},tooltips:{callbacks:{label:function(e,t){return t.labels[e.index]}}},responsive:!0,maintainAspectRatio:!0,onClick:function(t,a){var n,r=a[0]._chart,c=r.getElementAtEvent(t)[0],l=r.data.datasets[c._datasetIndex];r.data.labels[c._index],l.data[c._index];n=c._index,e.updateColorAction(f[n])}}}))}(ge))),r.a.createElement("li",{className:"w-full"},r.a.createElement("a",{className:"h-12 md:rounded text-white w-full md:w-12",href:"#"},"Wheels"),r.a.createElement("div",{className:"sub-menu"},r.a.createElement("ul",null,!!O.length&&O.map((function(t,a){return r.a.createElement("li",{key:a,onClick:function(a){return e.updateWheelAction(t)}},q.name===t.name?r.a.createElement(r.a.Fragment,null,r.a.createElement("i",{className:"fas fa-check-circle",style:{color:"green"}})," "):" ",r.a.createElement("a",{href:"#"},t.name))}))))),r.a.createElement("li",{className:"w-full"},r.a.createElement("a",{className:"h-12 md:rounded text-white w-full md:w-12",href:"#"},"Setting"),r.a.createElement("div",{className:"sub-menu"},r.a.createElement("ul",null,!!N.length&&N.map((function(t,a){return r.a.createElement("li",{key:a,onClick:function(a){return ie[(n=t).name]?delete ie[n.name]:ie[n.name]=n,void e.updateSpoilers(ie);var n}},(n=t.name,ie[n]?r.a.createElement(r.a.Fragment,null,r.a.createElement("i",{className:"fas fa-check-circle",style:{color:"green"}})," "):" "),r.a.createElement("a",{href:"#",onClick:function(e){e.preventDefault()}},t.name));var n}))))),r.a.createElement("li",{className:"w-full"},r.a.createElement("a",{className:"h-12 md:rounded text-white w-full md:w-12",href:"#"},"Other Options"),r.a.createElement("div",{className:"sub-menu"},r.a.createElement("ul",null,r.a.createElement("li",{onClick:function(e){e.preventDefault(),be(!pe),v.map((function(e,t){Ne(e)}))}},pe?r.a.createElement(r.a.Fragment,null,r.a.createElement("i",{className:"fas fa-check-circle",style:{color:"green"}})," "):" ",r.a.createElement("a",{href:"#"},"Select All")),!!v.length&&v.map((function(e,t){return r.a.createElement("li",{key:t,onClick:function(t){return Ne(e)}},(a=e.name,le[a]?r.a.createElement(r.a.Fragment,null,r.a.createElement("i",{className:"fas fa-check-circle",style:{color:"green"}})," "):" "),r.a.createElement("a",{href:"#",onClick:function(e){e.preventDefault()}},e.name));var a}))))),r.a.createElement("li",{className:"w-full"},r.a.createElement("a",{className:"h-12 md:rounded text-white w-full md:w-12",href:"#"},"Variant"),r.a.createElement("div",{className:"sub-menu list whitespace-normal flex"},r.a.createElement("ul",{className:"text-left grid grid-cols-2"},r.a.createElement("li",null,r.a.createElement("div",{className:"text-xs md:text-base font-semibold text-red-500"},"Grade"),r.a.createElement("div",{className:"text-xs md:text-base mt-1 text-sm text-gray-800"},Z.name),r.a.createElement("div",{className:"text-xs md:text-base font-semibold text-red-500 mt-2"},"Body Colour"),r.a.createElement("div",{className:"text-xs md:text-base mt-1 text-sm text-gray-800"},ae.name),r.a.createElement("div",{className:"text-xs md:text-base font-semibold text-red-500 mt-2"},"Wheel Type"),r.a.createElement("div",{className:"text-xs md:text-base mt-1 text-sm text-gray-800"},q.name)),r.a.createElement("li",null,r.a.createElement("div",{className:"text-xs md:text-base font-semibold text-red-500"},"Option & Accessories"),P?r.a.createElement("div",{className:"text-xs md:text-base mt-1 text-sm text-gray-800"},"Rare Spoiler"):"",G?r.a.createElement("div",{className:"text-xs md:text-base mt-1 text-sm text-gray-800"},"Front Spoiler"):"",B?r.a.createElement("div",{className:"text-xs md:text-base mt-1 text-sm text-gray-800"},"Side Spoiler"):"",!!Object.keys(le).length&&Object.keys(le).map((function(e){return r.a.createElement("div",{className:"text-xs md:text-base mt-1 text-sm text-gray-800"},e)})))))),r.a.createElement("li",{className:"w-full"},r.a.createElement("button",{className:"right h-12 px-3 md:px-10 md:rounded text-white bg-black bg-opacity-75 hover:bg-opacity-100 transition ease-in-out duration-300",onClick:function(){return je(!0)}},"Interior"))))})),F=a(48),L=a.n(F);function V(){return B.apply(this,arguments)}function B(){return(B=Object(w.a)(N.a.mark((function e(){var t,a;return N.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,L.a.get("data/carsConfig.json");case 2:return t=e.sent,a=t.data,e.abrupt("return",a);case 5:case"end":return e.stop()}}),e)})))).apply(this,arguments)}var H=a(79),M=a.n(H),W=Object(s.b)(null,{addConfig:function(e){return{type:"ADD_CONFIG",value:e}},updateBasePath:function(e){return{type:"UPDATE_BASEPATH",value:e}},updateangleAction:O,updateVariantAction:p,updateColorAction:b,updateWheelAction:d,updateVariantStartFrom:function(e){return{type:"UPDATE_VARIANT_STATINGFROM",value:e}},updateSpoilers:E})((function(e){var t=Object(n.useState)(),a=Object(y.a)(t,2),c=a[0],l=a[1],o=Object(n.useState)(!1),u=Object(y.a)(o,2),i=u[0],m=u[1],f=Object(n.useState)(!1),p=Object(y.a)(f,2),b=p[0],d=p[1],O=Object(s.c)((function(e){return e})).carState,E=Object(n.useState)(0),j=Object(y.a)(E,2),h=j[0],v=j[1],g=Object(S.f)().carName;Object(n.useEffect)(Object(w.a)(N.a.mark((function e(){var t,a,n,r;return N.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,V();case 2:if(t=e.sent,a=t.find((function(e){return e.id===g})),console.log(a),a){e.next=8;break}return console.error("incorrect car is given in parameter or car is missing in carConfig.json"),e.abrupt("return");case 8:return e.next=10,c=a,L.a.get(c.path);case 10:n=e.sent,r=n.data,x(r);case 13:case"end":return e.stop()}var c}),e)}))),[]),Object(n.useEffect)(Object(w.a)(N.a.mark((function t(){return N.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:e.addConfig(c);case 1:case"end":return t.stop()}}),t)}))),[c]),Object(n.useEffect)(Object(w.a)(N.a.mark((function e(){return N.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:O&&O.angle&&v(O.angle);case 1:case"end":return e.stop()}}),e)}))),[O]);var x=function(t){e.updateBasePath(t.basePath),e.updateVariantAction(t.variants[0]),e.updateColorAction(t.colors[0]),e.updateWheelAction(t.wheels[0]),e.updateVariantStartFrom(t.variantStartFrom),l(t)},A=function(e){m(!1),d(0)},T=function(e){var t=e.pageX||(e.targetTouches&&e.targetTouches[0]?e.targetTouches[0].pageX:e.changedTouches&&e.changedTouches[e.changedTouches.length-1].pageX);m(!0),d(t)},_=function(t){var a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:3;if(i){var n=0,r=t.pageX||(t.targetTouches&&t.targetTouches[0]?t.targetTouches[0].pageX:t.changedTouches&&t.changedTouches[t.changedTouches.length-1].pageX);if(a>0&&r%a!=0)return;r>b?(n=parseInt(h)+1>35?0:parseInt(h)+1,v(n)):(n=parseInt(h)-1<0?35:parseInt(h)-1,v(n)),e.updateangleAction(n),d(r)}};return r.a.createElement(r.a.Fragment,null,r.a.createElement("div",{className:"App"},r.a.createElement("div",{className:"bg"},r.a.createElement("div",{className:"wrapper relative"},r.a.createElement("img",{src:M.a,className:"w-full",alt:"cover"}),r.a.createElement("div",{className:"absolute inset-0",onTouchStart:function(e){return T(e)},onTouchEnd:function(){return A()},onTouchMove:function(e){return _(e,0)},onMouseDown:function(e){e.preventDefault(),T(e)},onMouseUp:function(e){e.preventDefault(),A()},onMouseMove:function(e){e.preventDefault(),_(e,5)}},r.a.createElement(k,null)),r.a.createElement(C,{config:c})))))}));function G(){return r.a.createElement(S.c,null,r.a.createElement(S.a,{path:"/:carName?",component:W,exact:!0}))}var X=function(){return r.a.createElement(r.a.Fragment,null,r.a.createElement(s.a,{store:g},r.a.createElement(o.a,null,r.a.createElement(G,null))))};l.a.render(r.a.createElement(r.a.StrictMode,null,r.a.createElement(X,null)),document.getElementById("root"))},79:function(e,t,a){e.exports=a.p+"static/media/bg.1d3261af.jpg"},81:function(e,t,a){e.exports=a(209)},86:function(e,t,a){},87:function(e,t,a){},88:function(e,t,a){},94:function(e,t,a){e.exports=a.p+"static/media/loading.f1331fef.gif"},95:function(e,t,a){}},[[81,1,2]]]);
//# sourceMappingURL=main.262f1f34.chunk.js.map
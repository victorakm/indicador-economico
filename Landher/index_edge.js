/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "2.0.0",
   minimumCompatibleVersion: "2.0.0",
   build: "2.0.0.250",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_contenedor} > header:nth-child(1) > img:nth-child(4)": [
            ["style", "opacity", '1']
         ],
         "${_contenedor} > header:nth-child(1) > img:nth-child(3)": [
            ["style", "opacity", '1']
         ],
         "${_contenedor} > header:nth-child(1) > img:nth-child(2)": [
            ["style", "opacity", '1']
         ],
         "${_contenedor} > header:nth-child(1) > img:nth-child(1)": [
            ["style", "opacity", '1']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 12500,
         autoPlay: true,
         timeline: [
            { id: "eid4", tween: [ "style", "${_contenedor} > header:nth-child(1) > img:nth-child(4)", "opacity", '1', { fromValue: '1'}], position: 0, duration: 0 },
            { id: "eid7", tween: [ "style", "${_contenedor} > header:nth-child(1) > img:nth-child(4)", "opacity", '0', { fromValue: '1'}], position: 3000, duration: 500 },
            { id: "eid16", tween: [ "style", "${_contenedor} > header:nth-child(1) > img:nth-child(4)", "opacity", '1', { fromValue: '0.000000'}], position: 12000, duration: 500 },
            { id: "eid3", tween: [ "style", "${_contenedor} > header:nth-child(1) > img:nth-child(3)", "opacity", '1', { fromValue: '1'}], position: 0, duration: 0 },
            { id: "eid10", tween: [ "style", "${_contenedor} > header:nth-child(1) > img:nth-child(3)", "opacity", '0', { fromValue: '1'}], position: 6000, duration: 500 },
            { id: "eid2", tween: [ "style", "${_contenedor} > header:nth-child(1) > img:nth-child(2)", "opacity", '1', { fromValue: '1'}], position: 0, duration: 0 },
            { id: "eid13", tween: [ "style", "${_contenedor} > header:nth-child(1) > img:nth-child(2)", "opacity", '0', { fromValue: '1'}], position: 9000, duration: 500 },
            { id: "eid1", tween: [ "style", "${_contenedor} > header:nth-child(1) > img:nth-child(1)", "opacity", '1', { fromValue: '1'}], position: 0, duration: 0 }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-7213039");

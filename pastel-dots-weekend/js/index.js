var circ = $(".circle");

Draggable.create(circ, {
  type: "x,y",
  edgeResistance: 0.5,
  bounds: "#container",
  throwProps: true
});

TweenMax.staggerTo(circ, 3, {
  rotation: 360,
  scale: 0.85,
  repeat: -1,
  yoyo: true,
  transformOrigin: "50% 50%",
  ease: Elastic.easeInOut
}, 0.35);

TweenMax.staggerFromTo(".circle path", 3, {fill:"#ED987E"}, {fill:"#EAD07F", yoyo:true, repeat:-1, ease:Elastic.easeInOut}, 0.35);
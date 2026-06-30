gsap.from(".hero-title", {
  y: 80,
  opacity: 0,
  duration: 1,
});

gsap.from(".word", {
  y: 50,
  opacity: 0,
  stagger: 0.2,
  duration: 0.8
});

gsap.from(".hero-text", {
  y: 50,
  opacity: 0,
  duration: 1,
  delay: 0.3,
});

gsap.from(".hero-btn", {
  y: 30,
  opacity: 0,
  duration: 1,
  delay: 0.6,
});

gsap.to(".hero-image", {
  y: -15,
  duration: 2,
  repeat: -1,
  yoyo: true,
  ease: "power1.inOut"
});

gsap.to(".card-1", {
  y: -15,
  duration: 2,
  repeat: -1,
  yoyo: true,
  ease: "sine.inOut"
});

gsap.to(".card-2", {
   y: -15,
  duration: 2,
  repeat: -1,
  yoyo: true,
  ease: "sine.inOut"
});
gsap.to(".bg-text",{
    x:20,
    duration:6,
    repeat:-1,
    yoyo:true,
    ease:"sine.inOut"
});

gsap.to(".blob1", {
  x: 120,
  y: 80,
  scale: 1.2,
  rotation: 30,
  duration: 8,
  repeat: -1,
  yoyo: true,
  ease: "sine.inOut"
});

gsap.to(".blob2", {
  x: -100,
  y: 120,
  scale: 0.8,
  rotation: -30,
  duration: 10,
  repeat: -1,
  yoyo: true,
  ease: "sine.inOut"
});


const tl = gsap.timeline();

tl.from(".hero-image", {
  x: 100,
  opacity: 0,
  duration: 1.2
}, "-=0.8");


gsap.from(".about-image",{

    x:-120,

    opacity:0,

    duration:1.2,

    scrollTrigger:{
        trigger:".about",
        start:"top 70%"
    }

});

gsap.from(".about-content",{

    x:120,

    opacity:0,

    duration:1.2,

    scrollTrigger:{
        trigger:".about",
        start:"top 70%"
    }

});

// gsap.from(".stat-box",{

//     y:60,

//     opacity:0,

//     stagger:.15,

//     duration:.8,

//     scrollTrigger:{
//         trigger:".about-stats",
//         start:"top 80%"
//     }

// });

gsap.from(".timeline-item.left",{
    x:-100,
    opacity:0,
    stagger:.25,
    duration:1
});

gsap.from(".timeline-item.right",{
    x:100,
    opacity:0,
    stagger:.25,
    duration:1
});
gsap.utils.toArray(".progress").forEach((bar) => {

    const width = bar.style.width;

    gsap.set(bar,{
        width:0
    });

    gsap.to(bar,{
        width:width,
        duration:1.5,
        ease:"power2.out",
        scrollTrigger:{
            trigger:bar,
            start:"top 85%"
        }
    });

});
const roles = [
  "Frontend Developer",
  "Angular Developer",
  "UI Developer",
  "Problem Solver"
];

let index = 0;

setInterval(() => {
  gsap.to(".role", {
    opacity: 0,
    y: -20,
    duration: .3,
    onComplete() {
      index = (index + 1) % roles.length;
      document.querySelector(".role").textContent = roles[index];

      gsap.fromTo(".role",
        {opacity:0,y:20},
        {opacity:1,y:0,duration:.3}
      );
    }
  });
}, 2500);



$('#aboutRow').hover(function(){ 
    $("#aboutNavLink").attr("class", "nav-link active");
    $("#workNavLink").attr("class", "nav-link");
    $("#contactNavLink").attr("class", "nav-link");
});
$('#workRow').hover(function(){
    $("#aboutNavLink").attr("class", "nav-link");
    $("#workNavLink").attr("class", "nav-link active");
    $("#contactNavLink").attr("class", "nav-link");
    
});
$('#contactRow').hover(function(){ 
    $("#aboutNavLink").attr("class", "nav-link");
    $("#workNavLink").attr("class", "nav-link");
    $("#contactNavLink").attr("class", "nav-link active");
});

$("#aboutNavLink").click(function(){
    $("#aboutNavLink").attr("class", "nav-link active");
    $("#workNavLink").attr("class", "nav-link");
    $("#contactNavLink").attr("class", "nav-link");
})
$("#workNavLink").click(function(){
    $("#aboutNavLink").attr("class", "nav-link");
    $("#workNavLink").attr("class", "nav-link active");
    $("#contactNavLink").attr("class", "nav-link");
})
$("#contactNavLink").click(function(){
    $("#aboutNavLink").attr("class", "nav-link");
    $("#workNavLink").attr("class", "nav-link");
    $("#contactNavLink").attr("class", "nav-link active");
})

let options = {
    root: document.querySelector('#scrollArea'),
    rootMargin: '0px',
    threshold: buildThresholdList()
  }
  
let observer = new IntersectionObserver(handleIntersect, options);
let target = document.querySelectorAll('.card-body');
observer.observe(target[0]);
observer.observe(target[1]);  
observer.observe(target[2]);
observer.observe(target[3]);
observer.observe(target[4]);

function handleIntersect(entries, observer) {
    entries.forEach((entry) => {
        if(entry === entry[0]){
            entry.target.style.opacity = entry.intersectionRatio * 1.1;
        }
        else{
            entry.target.style.opacity = entry.intersectionRatio * 1.5;
        }
    })
}

  function buildThresholdList() {
    let thresholds = [];
    let numSteps = 50;
  
    for (let i=1.0; i<=numSteps; i++) {
      let ratio = i/numSteps;
      thresholds.push(ratio);
    }
  
    thresholds.push(0);
    return thresholds;
  }
  
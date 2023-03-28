<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .circle{
      height: 24px;
      width: 24px;
      border-radius: 24px;
      background-color: black;
      position: fixed;
      top: 0;
      left: 0;
      pointer-events: none;
      z-index: 99999999;
    }
    * {
  cursor: none;
}
    </style>
</head>
<body>


<div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <script>
  const coords = {x:0,y:0};
  const circles = document.querySelectorAll(".circle");
  const colors = [
  "#0080FF",
  "#1C86EE",
  "#1E90FF",
  "#00BFFF",
  "#87CEEB",
  "#ADD8E6",
  "#87CEFA",
  "#6495ED",
  "#4682B4",
  "#4169E1",
  "#0000FF",
  "#00008B",
  "#000080"
];

  circles.forEach(function (circle){
    circle.x=0;
    circle.y=0;

  })
  circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
  
});


function animateCircles() {
  setTimeout(function() {
  let x = coords.x;
  let y = coords.y;
  
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    
    circle.style.scale = (circles.length - index) / circles.length;
    
    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.3;
    y += (nextCircle.y - y) * 0.3;
  });
 
  requestAnimationFrame(animateCircles);
},10);}

animateCircles();

 </script>
</body>
</html>
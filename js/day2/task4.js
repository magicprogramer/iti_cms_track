let r = parseFloat(prompt("enter the radius value"));
alert("Total area of the circle is " + (r * Math.PI * r));
let angle = parseFloat(prompt("enter angle"));
let red_angle = angle / 180 * Math.PI;
console.log(red_angle);
document.write("cos "+angle + " = " + Math.cos(red_angle).toFixed(4));
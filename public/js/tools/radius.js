let ShadowResultBox = document.getElementById('shadow-result'); // Result Box
let ShadowCodeBox = document.getElementById('code-result'); // Code Result
let AllCorner = document.getElementById("shadowAll"); // All Corner
let ShadowTop = document.getElementById('shadow-top'); // Top Corner
let ShadowRight = document.getElementById('shadow-right'); // Right Corner
let ShadowBottom = document.getElementById('shadow-bottom'); // Bottom Corner
let ShadowLeft = document.getElementById('shadow-left'); // Left Corner
let CopyToCliboard = document.getElementById('copy-to-clipboard'); // Copy To Clipboard

var topLeft = 0;
var topRight = 0;
var BottomRight = 0;
var BottomLeft = 0;

let ResultString = `border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;`;

AllCorner.addEventListener("change", e => {

    ResultString = `border-radius : ${e.target.value}%`;

    ShadowTop.value = e.target.value;
    ShadowRight.value = e.target.value;
    ShadowBottom.value = e.target.value;
    ShadowLeft.value = e.target.value;

    ShadowCodeBox.innerHTML = ResultString;

    ShadowResultBox.style.borderRadius = `${e.target.value}%`;
});

ShadowTop.addEventListener("change" , e => {

    topLeft = e.target.value;

    ResultString = `border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;`;

    ShadowCodeBox.innerHTML = ResultString;

    ShadowResultBox.style.borderTopLeftRadius = `${e.target.value}%`;

});

ShadowRight.addEventListener("change" , e => {

    topRight = e.target.value;

    ResultString = `border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;`;

    ShadowCodeBox.innerHTML = ResultString;

    ShadowResultBox.style.borderTopRightRadius = `${e.target.value}%`;

});

ShadowBottom.addEventListener("change" , e => {

    BottomRight = e.target.value;

    ResultString = `border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;`;

    ShadowCodeBox.innerHTML = ResultString;

    ShadowResultBox.style.borderBottomRightRadius = `${e.target.value}%`;

});

ShadowLeft.addEventListener("change" , e => {

    BottomLeft = e.target.value;

    ResultString = `border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;`;

    ShadowCodeBox.innerHTML = ResultString;

    ShadowResultBox.style.borderBottomLeftRadius = `${e.target.value}%`;

});


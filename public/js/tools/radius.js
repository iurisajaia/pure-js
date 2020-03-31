const RadiusRefs = {
    ShadowResultBox : document.querySelector("#shadow-result"),
    ShadowCodeBox : document.querySelector("#code-result"),
    AllCorner : document.querySelector("#shadowAll"),
    ShadowTop : document.querySelector("#shadow-top"),
    ShadowRight : document.querySelector("#shadow-right"),
    ShadowBottom : document.querySelector("#shadow-bottom"),
    ShadowLeft : document.querySelector("#shadow-left"),
    CopyToCliboard : document.querySelector("#copy-to-clipboard"),
}

var topLeft = 0;
var topRight = 0;
var BottomRight = 0;
var BottomLeft = 0;

let ResultString = `border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;`;

const resultRadius = () => {
    return RadiusRefs.ShadowCodeBox.innerHTML = `border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;`;
};

RadiusRefs.AllCorner.addEventListener("change", e => {

    ResultString = `border-radius : ${e.target.value}%`;

    RadiusRefs.ShadowTop.value = e.target.value;
    RadiusRefs.ShadowRight.value = e.target.value;
    RadiusRefs.ShadowBottom.value = e.target.value;
    RadiusRefs.ShadowLeft.value = e.target.value;

    RadiusRefs.ShadowCodeBox.innerHTML = ResultString;

    RadiusRefs.ShadowResultBox.style.borderRadius = `${e.target.value}%`;
});

RadiusRefs.ShadowTop.addEventListener("change" , e => {
    topLeft = e.target.value;
    resultRadius();
    RadiusRefs.ShadowResultBox.style.borderTopLeftRadius = `${e.target.value}%`;
});

RadiusRefs.ShadowRight.addEventListener("change" , e => {
    topRight = e.target.value;
    resultRadius();
    RadiusRefs.ShadowResultBox.style.borderTopRightRadius = `${e.target.value}%`;
});

RadiusRefs.ShadowBottom.addEventListener("change" , e => {
    BottomRight = e.target.value;
    resultRadius();
    RadiusRefs.ShadowResultBox.style.borderBottomRightRadius = `${e.target.value}%`;
});

RadiusRefs.ShadowLeft.addEventListener("change" , e => {
    BottomLeft = e.target.value;
    resultRadius();
    RadiusRefs.ShadowResultBox.style.borderBottomLeftRadius = `${e.target.value}%`;
});


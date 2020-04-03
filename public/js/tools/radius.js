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

let ResultString = `
    border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;
    -moz-border-radius: ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;
    -webkit-border-radius: ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;
`;

const resultRadius = () => {
    return RadiusRefs.ShadowCodeBox.innerHTML = `
    border-radius : ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;
    -moz-border-radius: ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;
    -webkit-border-radius: ${topLeft}% ${topRight}% ${BottomRight}% ${BottomLeft}%;
    `;
};

const allCornerMove = val => {
    ResultString = `
    border-radius : ${val}%;
    -moz-border-radius: ${val}%;
    -webkit-border-radius: ${val}%;
    `;

    RadiusRefs.ShadowTop.value = val;
    RadiusRefs.ShadowRight.value = val;
    RadiusRefs.ShadowBottom.value = val;
    RadiusRefs.ShadowLeft.value = val;

    topLeft  = val;
    topRight  = val;
    BottomRight  = val;
    BottomLeft  = val;

    RadiusRefs.ShadowCodeBox.innerHTML = ResultString;

    RadiusRefs.ShadowResultBox.style.borderRadius = `${val}%`;
}

const topCornerMove = val => {
    topLeft = val;
    resultRadius();
    RadiusRefs.ShadowResultBox.style.borderTopLeftRadius = `${val}%`;
};

const rightCornerMove = val => {
    topRight = val;
    resultRadius();
    RadiusRefs.ShadowResultBox.style.borderTopRightRadius = `${val}%`;
};

const bottomCornerMove = val => {
    BottomRight = val;
    resultRadius();
    RadiusRefs.ShadowResultBox.style.borderBottomRightRadius = `${val}%`;
};

const leftCornerMove = val => {
    BottomLeft = val;
    resultRadius();
    RadiusRefs.ShadowResultBox.style.borderBottomLeftRadius = `${val}%`;
};



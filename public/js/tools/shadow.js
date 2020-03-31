const Elements = {
    horizontal : document.querySelector('#horizontal'),
    vertical : document.querySelector('#vertical'),
    blur : document.querySelector('#blur'),
    spread : document.querySelector('#spread'),
    shadowColor : document.querySelector('#shadowColor'),
    backgroundColor : document.querySelector('#backgroundColor'),
    backgroundContainer : document.querySelector('#backgroundContainer'),
    boxColor : document.querySelector('#boxColor'),
    opacity : document.querySelector('#opacity'),
    shadowResult : document.querySelector('#shadowResult'),
    shadowCode : document.querySelector('#shadowCode'),
};

const result = {
    horizontal : 10,
    vertical : 10,
    blur : 5,
    spread : 0,
    shadowColor : '#000',
    backgroundColor : '#fff',
    boxColor : '#ffcd38',
}

const shadowRender = () => {
    return Elements.shadowResult.style.boxShadow = `${result.horizontal}px ${result.vertical}px ${result.blur}px ${result.spread}px ${result.shadowColor}`;
}
const resultShadow = () => {
    return Elements.shadowCode.innerHTML = `
    box-shadow : ${result.horizontal}px ${result.vertical}px ${result.blur}px ${result.spread}px ${result.shadowColor};
    -moz-box-shadow: ${result.horizontal}px ${result.vertical}px ${result.blur}px ${result.spread}px ${result.shadowColor};
    -webkit-box-shadow: ${result.horizontal}px ${result.vertical}px ${result.blur}px ${result.spread}px ${result.shadowColor};
    `;
};

document.addEventListener("DOMContentLoaded", function(event) {
    Elements.shadowResult.style.backgroundColor = result.boxColor;
    shadowRender();
    resultShadow();
});
$('#shadowColor').colorpicker()
$('#boxColor').colorpicker()
$('#backgroundColor').colorpicker()

$('#shadowColor').on('change' , (e) => {
    result.shadowColor = e.target.value
    shadowRender()
    resultShadow();
 })
 $('#boxColor').on('change' , (e) => {
    result.boxColor = e.target.value
    Elements.shadowResult.style.backgroundColor = e.target.value
 })
 $('#backgroundColor').on('change',(e)=>{
    result.backgroundColor = e.target.value
    Elements.backgroundContainer.style.backgroundColor = e.target.value
 })
Elements.horizontal.addEventListener('change' , (e) => {
   result.horizontal = e.target.value
   shadowRender()
   resultShadow();
})

Elements.vertical.addEventListener('change' , (e) => {
    result.vertical = e.target.value
    shadowRender()
    resultShadow();
 })
 Elements.blur.addEventListener('change' , (e) => {
    result.blur = e.target.value
    shadowRender()
    resultShadow();
 })
 Elements.spread.addEventListener('change' , (e) => {
    result.spread = e.target.value
    shadowRender()
    resultShadow();
 })
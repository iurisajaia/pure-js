const Elements = {
    horizontal : document.querySelector('#horizontal'),
    vertical : document.querySelector('#vertical'),
    blur : document.querySelector('#blur'),
    spread : document.querySelector('#spread'),
    shadowColor : document.querySelector('#shadowColor'),
    backgroundColor : document.querySelector('#backgroundColor'),
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
    opacity : 1
}

const shadowRender = () => {
    return Elements.shadowResult.style.boxShadow = `${result.horizontal}px ${result.vertical}px ${result.blur}px ${result.spread}px ${result.shadowColor}`;
}

document.addEventListener("DOMContentLoaded", function(event) {
    Elements.shadowResult.style.backgroundColor = result.boxColor;
    shadowRender();
});

Elements.horizontal.addEventListener('change' , () => {

})

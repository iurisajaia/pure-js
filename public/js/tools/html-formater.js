const HtmlFormatTextare = document.getElementById('htmlFormat');
const HtmlFormatButton = document.getElementById('formatHtmlButton');
const HtmlFormatOutput = document.getElementById('htmlFormatOutput');

HtmlFormatButton.addEventListener('click' , () => {

    const result = pretty(HtmlFormatTextare.value);

    // HtmlFormatOutput.innerHTML = result;
})

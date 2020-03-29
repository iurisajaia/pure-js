const MinifyCssButton = document.getElementById("minifycssButton");
const MinifyCssTextArea = document.getElementById("minifyCss");
const MinifyCssOutputArea = document.getElementById("minifyCssOutput");


MinifyCssButton.addEventListener('click' , () => {
    const text = MinifyCssTextArea.value;

    const response = text.replace(/\/\*.*\*\/|\/\*[\s\S]*?\*\/|\n|\t|\v|\s{2,}/g,'')
                         .replace(/\s*\{\s*/g,'{')
                         .replace(/\s*\}\s*/g,'}')
                         .replace(/\s*\:\s*/g,':')
                         .replace(/\s*\;\s*/g,';')
                         .replace(/\s*\,\s*/g,',')
                         .replace(/\s*\~\s*/g,'~')
                         .replace(/\s*\>\s*/g,'>')
                         .replace(/\s*\+\s*/g,'+')
                         .replace(/\s*\!\s*/g,'!');

    MinifyCssOutputArea.innerHTML = response;
})

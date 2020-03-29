let ShadowResultBox = document.getElementById('shadow-result'); // Result Box
let ShadowCodeBox = document.getElementById('code-result'); // Code Result
let AddColor = document.getElementById("addColor"); // Add Color
let ColorContainer = document.getElementById('color-container'); // Color Container
let CopyToCliboard = document.getElementById('copy-to-clipboard'); // Copy To Clipboard



let options=[
    {   id:new Date('2019').getTime(),
        color: 'rgba(19,241,134,1)',
        spread: 0,
    },
    {
        id:new Date('2020').getTime(),
        color: 'rgba(23,21,20,1)',
        spread: 0,
    }
]


     const generateCode = () =>{
        let ResultString = 'linear-gradient('
        options.forEach((option,i,arr)=>{
            if(i!==arr.length-1){
                ResultString += option.color + ',';
            }else{
                ResultString += option.color + ')'
            }
        })
        ShadowCodeBox.innerHTML = ResultString;
        ShadowResultBox.style.background = ResultString;
    }

    const updateColors = (id,type,value) =>{
        if(type==='del'){
        options = options.filter(option => option.id !== id)
        }else if(type==='color'){
            let  option = options.find(option => option.id === id)
            option.color = value
        }else if(type==='spread'){
            let  option = options.find(option => option.id === id)
            option.spread = value
        }else{
            options.push({
                id:id,
                color: 'rgba(19,241,134,1)',
                spread: 0,  
               })
        }
        console.log(options)
       generateCode()
    }
    const addColors = (id,type) =>{
          ColorContainer.insertAdjacentHTML('beforeend',`
          <div class="form-group">
          <input type="text" class="form-control color-input" id=${id} value='rgba(19,241,134,1)'/>
      <div class="color-options">
          <input type="text" data-id=${id} name="spread" value="0"/>
    <span class="spread">% ${(type === "add") ? `<i data-id=${id} class="fas fa-trash" style="margin-left: 10px; cursor: pointer;"></i>` :''}</span>
      </div>
      </div>
          `)
          $(`#${id}`).colorpicker()
          $(`#${id}`).on('change',(e) => changeColors(e,id))
          ColorContainer.querySelector(`input[data-id='${id}']`).addEventListener('keyup',(e) => changeSpread(e,id))
          if(type!=='init'){
            updateColors(id)
            ColorContainer.querySelector(`i[data-id='${id}']`).addEventListener('click',(e) => deleteColors(e,id))
          }  
    }
    const deleteColors = (e,id) =>{
        e.target.closest('.form-group').remove()
        updateColors(id,'del')
    }
    const changeColors = (e,id) =>{
        updateColors(id,'color',e.target.value)
    }
    const changeSpread = (e,id) =>{
        updateColors(id,'spread',e.target.value)
    }
    AddColor.addEventListener("click", e =>{
        addColors(new Date().getTime(),'add')
    })

    options.forEach(option => addColors(option.id,"init"))
    generateCode()

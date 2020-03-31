let RadialCode = document.getElementById('radial-code'); // Code Result
let AddRadialColor = document.getElementById("addRadialColor"); // Add Color
let Shapes = document.getElementById('shapes');
let X = document.getElementById('centerx');
let Y = document.getElementById('centery');
let ShapeDirections = document.getElementById('shape-directions');
let RadialColorContainer = document.getElementById('radialColorContainer'); // Color Container



let RadialString;
let Shape;
let CenterX = 50;
let CenterY = 50;
let ShapeDirection;
let RadialOptions=[
    {   id:new Date('2018').getTime(),
        color: 'rgba(19,241,134,1)',
        spread: 0,
    },
    {
        id:new Date('2017').getTime(),
        color: 'rgba(23,21,20,1)',
        spread: 0,
    }
]


     const generateRadialCode = () =>{
         if(Shape){
             if(ShapeDirection){
                RadialString = `radial-gradient(${Shape} ${ShapeDirection} at ${CenterX}% ${CenterY}%,`
             }else{
                RadialString = `radial-gradient(${Shape} at ${CenterX}% ${CenterY}%,`
             }
            }else{
            RadialString = `radial-gradient(at ${CenterX}% ${CenterY}%,`
         }
        
         RadialOptions.forEach((option,i,arr)=>{
            if(i!==arr.length-1){
                RadialString += option.color + (option.spread ? ' ' + option.spread + '%' : '') + ',';
            }else{
                RadialString += option.color + (option.spread ? ' ' + option.spread + '%' : '') + ')'
            }
        })
        RadialCode.innerHTML =`
        ${RadialString}
        ${'-webkit-'+RadialString}
        ${'-moz-'+RadialString}
        `;
        ShadowResultBox.style.background = RadialString;
    }

    const updateRadialColors = (id,type,value) =>{
        if(type==='del'){
        RadialOptions =  RadialOptions.filter(option => option.id !== id)
        }else if(type==='color'){
            let  option =  RadialOptions.find(option => option.id === id)
            option.color = value
        }else if(type==='spread'){
            let  option =  RadialOptions.find(option => option.id === id)
            option.spread = value
        }else{
            RadialOptions.push({
                id:id,
                color: 'rgba(19,241,134,1)',
                spread: 0,  
               })
        }
        console.log( RadialOptions)
       generateRadialCode()
    }
    const addRadialColors = (id,type) =>{
        RadialColorContainer.insertAdjacentHTML('beforeend',`
          <div class="form-group">
          <input type="text" class="form-control color-input" id=${id} value='rgba(19,241,134,1)'/>
      <div class="color-options">
          <input type="text" data-id=${id} name="spread" value="0"/>
    <span class="spread">% ${(type === "add") ? `<i data-id=${id} class="fas fa-trash" style="margin-left: 10px; cursor: pointer;"></i>` :''}</span>
      </div>
      </div>
          `)
          $(`#${id}`).colorpicker()
          $(`#${id}`).on('change',(e) => changeRadialColors(e,id))
          RadialColorContainer.querySelector(`input[data-id='${id}']`).addEventListener('keyup',(e) => changeRadialSpread(e,id))
          if(type!=='init'){
            updateRadialColors(id)
            RadialColorContainer.querySelector(`i[data-id='${id}']`).addEventListener('click',(e) => deleteRadialColors(e,id))
          }  
    }
    const deleteRadialColors = (e,id) =>{
        e.target.closest('.form-group').remove()
        updateRadialColors(id,'del')
    }
    const changeRadialColors = (e,id) =>{
        updateRadialColors(id,'color',e.target.value)
    }
    const changeRadialSpread = (e,id) =>{
        updateRadialColors(id,'spread',e.target.value)
    }
    AddRadialColor.addEventListener("click", e =>{
        addRadialColors(new Date().getTime(),'add')
    })


    ShapeDirections.addEventListener("change", function(e){
        ShapeDirection = e.target.value
        generateRadialCode()
    })
    Shapes.addEventListener("change", function(e){
        Shape = e.target.value
        generateRadialCode()
    })
    X.addEventListener("change", function(e){
        CenterX = e.target.value
        generateRadialCode()
    })
    Y.addEventListener("change", function(e){
        CenterY = e.target.value
        generateRadialCode()
    })

    RadialOptions.forEach(option => addRadialColors(option.id,"init"))
    generateRadialCode()


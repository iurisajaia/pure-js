<div>
    <div class="col-lg-g col-md-6 col-sm-12">
      <div>
        <form>
          <div>
            <h3>Select Colors</h3>
            <div>
              <span>Add Color</span>
              <i class="fas fa-plus-circle" id='addColor'>
              </i>
            </div>
            <div class="color-container" id="color-container">
        </div>
          </div>
          <div class="form-group">
            <label htmlFor="directions">Select Directions</label>
            <select id="directions" class="form-control">
              <option value="">unset</option>
              <option value="to bottom">to bottom</option>
              <option value="to top">to top</option>
              <option value="to left">to left</option>
              <option value="to right">to right</option>
              <option value="to bottom left">to bottom left</option>
              <option value="to bottom right">to bottom right</option>
              <option value="to top left">to top left</option>
              <option value="to top right">to top right</option>
            </select>
          </div>
          <div>
            <label for="degree">Degree</label>
            <input type="range" class="input-range" id="degree" name="degree" value="0" min="-360" max="360"/>
        </div>
        </form>
      </div>
    </div>
    <div class="code-container">
      <code id="code-result">
      
      </code>
      </div>
  </div>
 

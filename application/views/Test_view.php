

    <div class="container">
        <div class="row">
            <div class="col-12">
             <form action="<?= base_url() ?>test/add" method="post">
                <h2 class="text-center"> Nhập số chuyển đổi sang giá trị thập phân</h2>
        <div class="form-group">
         <label for="">Số</label>
        <input type="number" name="number_one" id="number_one" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
         </div> 
         <div class="form-group">
         <label for="">Giá trị thập phân</label>
        <input type="number" name="number_two" id="number_two" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
         </div> 
         
         <div class="form-group">
        
        <input type="submit" value="thêm mới" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
         </div> </div>
         

      </form>
        </div>
    </div>
 
    
   

     
  
<!-- Modal -->
<div id="add_product" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">New Product !</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
              <div class="form-group">
              <label class="control-label col-md-3" for="user"> Name</label>
                <div class="col-md-9">
                 <input type="text" name="nom[]" class="form-control" placeholder="nom" required>
               </div>
             </div>
            <div class="form-group">
              <label class="control-label col-md-3" for="piece">Catégorie</label>
              <div class="col-md-9">
                <select class="form-control" name="categorie">
                              
                              <option value="cap_hats">cap & hats</option>
                              <option value="jackets_coats">jackets & Coats</option>
                              <option value="jeans">jeans</option>
                              <option value="shirts">shirts</option>
                              <option value="shoes_boots">Shoes & boots</option>
                              <option value="shorts" >shorts</option>
    

                              
                              
                </select>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-md-3" for="piece">genre </label>
              <div class="col-md-9">
                <select class="form-control" name="genre">
                              
                              <option value="men">Men</option>
                              <option value="wommen" >Women</option>
                              <option value="kids" >Kids</option>
                              
                              
                </select>
              </div>
            </div>
          
              <div class="form-group">
              <label class="control-label col-md-3" for="user"> Prix</label>
                <div class="col-md-9">
                 <input type="text" name="prix[]" class="form-control" placeholder="Prix" required>
               </div>
             </div>
           
         </div>
         <br><br>
         <div class="row">
           <div class="col-md-12">
          
             <button class="btn btn-sm btn-warning pull-right" type="submit" id="add_group">ADD Product</button>
           </div>
         </div>
       </form>  
     </div>
   </div>
 </div>
</div>

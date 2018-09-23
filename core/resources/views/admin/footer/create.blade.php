
<div id="addSclFrm"  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
                <div class="row">
                        <div class="col-md-12">
            
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <i class="fa fa-plus"></i> Add Social Icon Info 
                                </div>
                                <form id="addSclFrmData" action="" method="POST" >
                                <div class="panel-body">
                                        {{ csrf_field()}}
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="icon">
                                                        <strong style="text-transform:uppercase"> Icon  </strong>
                                                    </label>
                                                    <div class="input-group">
                                                             <span class="input-group-addon">fa</span>
                                                             <input autocomplete="off" id="social_icon" type="text" class="form-control socioicon" name="icon">
                                                             
                                                         </div>
                                                         <span>
                                                                <strong id="errIcn" style="color: red;">

                                                                </strong>
                                                            </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="link">
                                                        <strong style="text-transform:uppercase">  link </strong>
                                                    </label>
                                                    <input type="url" class="form-control" id="link"  name="link" placeholder="Enter Link">
                                                    <span>
                                                            <strong id="errLink" style="color: red;">

                                                            </strong>
                                                        </span>
                                                </div>
                                            </div>
                                       
                                </div>
                                <div class="panel-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary pull-right">CREATE</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
        </div>
      </div>
      


        
   



<div id="editSclFrm" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i>Update Social Icon Info 
                    </div>
                    <form id="editSclFrmData" action="" method="post" enctype="multipart/form-data">
                    <div class="panel-body">
                            {{ csrf_field()}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="icon">
                                            <strong style="text-transform:uppercase"> Icon  </strong>
                                        </label>
                                        <div class="input-group">
                                                <span class="input-group-addon">fa</span>
                                                <input autocomplete="off" id="social_icon" type="text" class="form-control socioicon" name="icon" value="{{$footers->icon}}">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link">
                                            <strong style="text-transform:uppercase">  link </strong>
                                        </label>
                                        <input type="url" class="form-control" id="link"  name="link" value="{{$footers->link}}">
                                        <input type="hidden"   name="id" value="{{$footers->id}}">
                                    </div>
                                </div>
                           
                           
                    </div>
                    <div class="panel-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary pull-right">UPDATE</button>

                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
  </div>




       
    

 

<div id="editQusFrm"class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Question Info
                    </div>
                    <form id="editQusFrmData" action="" method="post" >
                    <div class="panel-body">
                            {{ csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="question">
                                        <strong style="text-transform:uppercase"> question </strong>
                                    </label>
                                    <input type="text" class="form-control" id="question" name="question" value="{{$question->question}}">
                                    <input type="hidden"  name="id" value="{{$question->id}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group table-responsive">
                                    <label>
                                        <strong style="text-transform:uppercase"> answer</strong>
                                    </label>
                                    <textarea name="answer" class="form-control " rows="10" id="area2" style="width: 100%;">{{$question->answer}}</textarea>
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
        



 @section('js')
<script src="{{asset('assets/admin/js/nicEdit.js')}}"></script>
<script>
  bkLib.onDomLoaded(function () {
        new nicEditor({
            iconsPath: '{{asset("assets/admin/img/nicEditorIcons.gif")}}'
        }).panelInstance('area2');
    });
   
</script>
@endsection
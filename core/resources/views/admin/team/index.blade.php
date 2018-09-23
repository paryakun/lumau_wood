@extends('admin.master') @section('title') Members  @endsection @section('css')


@endsection @section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Members 
            <a href="{{route('admin.member.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>
                Add New
            </a>
        </h3>
        <hr>
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Members List
                    </div>
                    <div class="panel-body">
                            @if($members->all())
                            <div class="row">
                            @foreach($members as $item)
                                <div class="col-md-3">
                                    <div class="panel panel-success">
                                    <div class="panel-heading">
                                            {{$item->name}}
                                    </div>
                                    <div class="panel-body">
                                            <img src="{{asset($item->image)}}" class="img-responsive  img-thumbnail" style="height: 250px;width: 100%;">
                                            <p>
                                                    {{$item->position}}
                                            </p>
                                    </div>
                                    <div class="panel-footer">
                                            <a href="{{route('admin.member.edit',$item->id)}}" class="btn btn-primary">
                                    
                                                    <i class="fa fa-edit"></i> EDIT
                                            </a>
                                            <a href="#" data-id="{{$item->id}}" class="btn btn-danger btnDelete pull-right" >
                                        
                                              <i class="fa fa-trash"></i> delete
                                      </a>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                            </div>
                        @else
                       <div class="alert alert-danger text-center">
                        <h1>
                            <strong>No Record Found...</strong>
                        </h1>
                       </div>
                        @endif
                    </div>
                   <div class="text-center">
                       {{ $members->links() }}
                   </div>
                    
                </div>
            </div>





        </div>

    </div>
</div>


<div id="deleteForm" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="row">
                    <div class="col-md-12">
        
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <i class="fa fa-trash"></i> Delete Social Icon Info 
                            </div>
                            <form id="editSclFrmData" action="{{route('admin.member.delete')}}" method="POST" >
                            <div class="panel-body text-center">
                                    {{ csrf_field()}}
                                    <input type="hidden" name="id" id="delId">
                                   <h3 style="color: red">Are You Sure to Delete This ?</h3>
                            </div>
                            <div class="panel-footer ">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary pull-right">DELETE</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

    </div>
</div>






@endsection 
@section('js')
<script src="{{asset('assets/admin/js/fontawesome-iconpicker.min.js')}}"></script>
<script>

    $(document).ready(function () {

        $.ajaxSetup({
           headers:{
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

       
       $(".btnDelete").on("click",function(e){
           e.preventDefault();
               $("#deleteForm").modal("show");
               var id = $(this).data('id');
               $("#delId").val(id);
       });



       
        
    });


 


</script>
@endsection
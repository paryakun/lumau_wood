@extends('admin.master') @section('title') Feature Info  @endsection
 @section('css')
 <link href="{{asset('assets/admin/css/fontawesome-iconpicker.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
 @section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Feature Info 
        </h3>
        <hr>
        <div class="row">


            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Feature Info 
                    </div>
                    <div class="panel-body ">
                            @if($features->all())
                        <table class="table table-responsive table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th> Name</th>
                                    <th> Text </th>
                                    <th> Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($features as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>
                                        <i class="fa {{$item->icon}}"></i>
                                    </td>
                                    <td>
                                        <a href="#" data-route="{{route('admin.feature.edit',$item->id)}}" class="btn btn-primary editBtn">
                                    
                                                <i class="fa fa-edit"></i> EDIT
                                        </a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        @else
                       <div class="alert alert-danger text-center">
                        <h1>
                            <strong>No Record Found...</strong>
                        </h1>
                       </div>
                        @endif
                    </div>
                   <div class="text-center">
                       {{ $features->links() }}
                   </div>
                    
                </div>
                
            </div>





        </div>

    </div>
</div>

<div id="modals">

</div>

@endsection 




@section('js')
<script src="{{asset('assets/admin/js/fontawesome-iconpicker.min.js')}}"></script>
<script>
  $(document).ready(function () {
        $(document).on('focus', '.socioicon', function(){
            $('.socioicon').iconpicker();
        });

        $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        $(".editBtn").on("click",function(e){
            e.preventDefault();
            var route = $(this).data("route");
            $.get(route,function(data){
                $("#modals").empty().append(data);
              
                $("#editFtrFrm").modal("show");
            });
        });
        
    $("#modals").on("submit","#editFtrFrmData",function(e){
        e.preventDefault();
        var frmData = $(this).serialize();
        $.ajax({
            url:"{{route('admin.feature.update')}}",
            type:"POST",
            data:frmData,
        })
        .done(function(data){
            $("#editFtrFrm").modal("hide");
            if(data == 1){
                    toastr.success('Information Updated Successfully ..','Success Message !!')
                    setTimeout(function(){
                        location.reload();
                    }, 1000);
                }else{
                    toastr.error('Demo Version ! Change Not Possible');
                }
        })
        .fail(function(error){

        });
    });


    });
    
    



</script>
@endsection

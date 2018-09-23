@extends('admin.master') @section('title') Achievements Info  @endsection 


@section('css')
<link href="{{asset('assets/admin/css/fontawesome-iconpicker.min.css')}}" rel="stylesheet" type="text/css" />
 @endsection 
 @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Achievements Info 
        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Achievements Info 
                    </div>
                    <div class="panel-body ">
                            @if($achievements->all())
                        <table class="table table-responsive table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th> Title</th>
                                    <th> Icon</th>
                                    <th> Total</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($achievements as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        <i class="fa {{$item->icon}}"></i>
                                    </td>
                                    <td>{{$item->total}}</td>
                                    <td>
                                        <a  data-route="{{route('admin.achievement.edit',$item->id)}}" class="btn btn-primary eidtBtn">
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
                       {{ $achievements->links() }}
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
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('focus', '.socioicon', function () {
            $('.socioicon').iconpicker();
        });
        
        $(".eidtBtn").on("click",function(e){
            e.preventDefault();
            var route = $(this).data("route");
            $.get(route,function(data){
                $("#modals").empty().append(data);
                $("#editAcmtFrm").modal("show");
            });
        });
        
        $("#modals").on("submit","#editAcmtFrmData",function(e){
            e.preventDefault();
            var frmData = $(this).serialize();
            $.ajax({
                type:"POST",
                url:"{{route('admin.achievement.update')}}",
                data:frmData,
            })
            .done(function(data){
                $("#editAcmtFrm").modal("hide");
                if(data == 1){
                    toastr.success('Information Updated Successfully ..','Success Message !!')
                    setTimeout(function(){
                        location.reload();
                    }, 1000);
                }
            });
        });



    });
    
</script>
@endsection
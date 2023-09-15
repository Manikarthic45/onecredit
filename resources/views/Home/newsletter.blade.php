@extends('Common.header')
@section('content')

<div class="main-panel">
<div class="content content-documentation">
<div class="container-fluid">
<div class="card card-documentation">
<div class="card-body">
    <div class="row">
        <div class="col-sm-4"><a href="{{url('newsletter')}}"> <button type="button"  class="btn btn-success">Newsletter List</button></a></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
    </div>


    @if(session()->has('success'))
        <div class="alert alert-notification-bx" id="success" style="width:600px; background-color:lightgreen ;" >
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
            <div class="col-6" style="width:600px; background-color: lightgreen;">
                <p class="m-0">Updated Successfully!</p>
            </div>
        </div>
    @endif
<div class="bd-example">
<div class="table-responsive">
<table id="basic-datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Created At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($nl_list as $order)
                                            <tr>
                                                <td>{{$order->email_id}}</td>
                                                <td>{{$order->created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

</div>

</div>
</div>
</div>

</div>
</div>
</div>

<div class="modal fade schedule-details design-modal" id="confirmpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width:500px;">
                    <div class="modal-content"><input type="hidden" id="customerid">
                        <div class="modal-header bdrnone">
                            <img src="{{asset('assets/des/images/graphic-calendar-icon.svg')}}" width="80" alt="" class="m-auto"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body pb-2">
                        Are u sure change status?
                        <div class="form-group">
                              <button type="button" onClick="changestatusyes();"   class="btn btn-success">Yes</button>
                              <button type="button" onClick="changestatusno();" class="btn btn-danger">No</button>
                        </div>

                        </div>
                    </div>
                </div>
     </div>
     <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatables').DataTable({
            });
            $('#success').delay(2000).fadeOut();
        });

    </script>
     <script>

     function changestatus(id)
    {
        document.getElementById("customerid").value=id;//alert(id);
        $('#confirmpopup').modal('show');

    }
    function changestatusyes()
    {
        var id=document.getElementById("customerid").value;//alert(id);
        $.ajax({
                type: 'post',
                url: '{{url('/changestatuscustomer')}}',
                data: {
                    customerid     : id,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {//alert(data);
                    $("#confirmpopup").hide();
                    window.location.href="{{url('/customer')}}";
                    $('#success').modal('show');
                    setTimeout(function(){$('#success').fadeOut();}, 20000);

                }
            });

    }
    function changestatusno()
    {
        window.location.href="{{url('/customer')}}";
    };

    </script>
@endsection


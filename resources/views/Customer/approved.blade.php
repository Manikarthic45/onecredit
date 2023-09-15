@extends('Common.Frontheader')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-8">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">CUSTOMER APPROVED LIST</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Table Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <td class="text-center"><b>S.NO</b></td>
                                        <th class="text-center">Customer Id</th>
                                        <th class="text-center">Customer Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Residential Address</th>
                                        <th class="text-center">Permanent Address</th>
                                        <th class="text-center">Mobile Number</th>
                                        <th class="text-center">Alternate Mobile Number</th>
                                        <th class="text-center">Martial Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sno = 0;
                                    ?>
                                    @foreach ($customer_approved as $data)
                                    <?php
                                    $sno += 1;
                                    ?>
                                    <tr>
                                        <td align="center">{{$sno}}</td>
                                        <td align="center">{{$data->customer_id}}</td>
                                        <td align="center">{{$data->customer_name}}</td>
                                        <td class="text-center">{{$data->email}}</td>
                                        <td class="text-center">{{$data->residential_address}}</td>
                                        <td class="text-center">{{$data->permanent_address}}</td>
                                        <td class="text-center">{{$data->mobile_number}}</td>
                                        <td class="text-center">{{$data->alternate_mobile_number}}</td>
                                        <td class="text-center">{{$data->martial_status}}</td>
                                        <td class="text-center">
                                            <div class="actions">
                                                <!-- <a href="view_approved_customer{{$data->id}}" class="btn btn-sm bg-danger-light me-2"><i class="fa fa-eye"></i></a> -->
                                                <a href="edit_approved_customer{{$data->id}}" class="btn btn-sm bg-danger-light me-2"><i class="fa fa-edit"></i></a>
                                                <!-- <a href="delete_approved_retail{{$data->id}}" class="btn btn-sm bg-danger-light me-2"> <i class="fa fa-trash"></i></a> -->
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end col-->
            </div>
            <!-- Table End -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" onclick="delet()">Yes, Delete
                        It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<input type="hidden" id="productcode">
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
    function opendelmodal(productcode) { //alert(productcode);
        document.getElementById("productcode").value = productcode;
        //  $("#vaModal").modal('show');
    }

    function delet() {
        var pid = document.getElementById("productcode").value; //alert(pid);
        $("#removeNotificationModal").modal('hide');
        $.ajax({
            type: 'post',
            url: '{{url(' / deleteproduct ')}}',
            data: {

                pid: pid,
                '_token': '{{csrf_token()}}'
            },
            success: function(data) { //alert(data);

                window.location.href = "{{url('/product')}}"

            }
        });
    }
</script>
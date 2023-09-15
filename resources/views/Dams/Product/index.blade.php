@extends('Common.Frontheader')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-8">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product List</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><a href="addproduct" >Add Product</a></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">

                    <div class="h-100">



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                            <thead>
                                                <tr>

                                                    <th>SlNo</th>
                                                    <th>Product Name</th>
                                                    <th>Stock</th>
                                                    <th>Size</th>
                                                    <th>Unit</th>
                                                    <th>Sales Price</th>
                                                    <th>Status </th>
                                                     <th> Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($plist as $list)
                                                <tr>


                                                    <td>{{$i++}}</td>
                                                    <td>{{$list->productname}}</td>
                                                    <td>{{$list->stock}}</td>
                                                    <td>{{$list->size }}</td>
                                                    <td>{{$list->unit }}</td>
                                                    <td>{{$list->salesprice }}</td>
                                                    <td>@if($list->status ==1) <button type="button" class="btn btn-success">Active</button> @else <button type="button" class="btn btn-warning">Inactive</button> @endif
                                                    </td>
                                                    <td><a href="editproduct?id={{$list->productid}}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                        <button type="button"
                                                                class="btn btn-link link-danger p-0 ms-3"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#removeNotificationModal" id="{{$list->productid}}" onclick="opendelmodal(this.id);">Delete
                                                            </button>
                                                        </td>
                                                </tr>
                                                @endforeach



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>


                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>

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
                    <button type="button" class="btn w-sm btn-danger" onclick="delet()" >Yes, Delete
                        It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<input type="hidden" id="productcode" >
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
    function opendelmodal(productcode)
    {//alert(productcode);
        document.getElementById("productcode").value=productcode;
      //  $("#vaModal").modal('show');
    }

    function delet()
    {
        var pid=document.getElementById("productcode").value;//alert(pid);
        $("#removeNotificationModal").modal('hide');
        $.ajax({
            type: 'post',
            url: '{{url('/deleteproduct')}}',
            data: {

                pid     : pid,
                '_token': '{{csrf_token()}}'
            },
            success: function (data) {//alert(data);

                window.location.href = "{{url('/product')}}"

            }
        });
    }
</script>
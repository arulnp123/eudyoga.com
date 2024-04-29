@include('admin.layouts.app')
@yield('content')


<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Manage Ownership type</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Ownership typs</li>
                    </ol>
                </nav>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success text-bg-success border-none">
                {{ session()->get('message') }}
            </div>
        @endif



        <div class="row">
            <div class=" col-md-12">
                <!-- Begin: life time stats -->
                <div class="portlet light portlet-fit portlet-datatable bordered">
                    <div class="portlet-title d-flex justify-content-between">
                        <div class=" caption"> <i class="icon-settings font-dark"></i> <span
                                class="caption-subject font-dark sbold uppercase">Ownership typ</span> </div>
                        <div class="actions"> <a href="{{ url('add_ownership_types') }}"
                                class="btn btn-xs btn-success"><i class="glyphicon glyphicon-plus"></i> Add New
                                Ownership type</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="card-body ">
            <div class=" table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr role="row">
                            <th>English</th>
                            <th>Ownership Types</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($listownership as $key => $listownershiplist)
                            <tr">

                                <td class=""> {{ $listownershiplist->lang }}</td>
                                <td class=""> {{ $listownershiplist->ownership_type }}</td>
                                <td class="">
                                    <!-- Example single danger button -->

                                    <div class="col">

                                        <button type="button" class="btn btn-light"><a
                                                href="{{ url('view_ownership_types', $listownershiplist->id) }}"><i
                                                    class="lni lni-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-light"><a
                                                href="{{ url('edit_ownership_types', $listownershiplist->id) }}"><i
                                                    class='bx bx-edit me-0'></i>
                                        </button>
                                        <button type="button" class="btn btn-light "> <a
                                                onclick="return confirm('Do you want to Confirm delete operation?')"
                                                href="{{ url('/delete_ownership_types', $listownershiplist->id) }}"><i
                                                    class="lni lni-trash"></i></a>
                                        </button>

                                    </div>

                                </td>

                                </tr>
                        @endforeach


                    </tbody>

                </table>


            </div>

        </div>
    </div>
</div>


@include('admin.layouts.footer')


<script>
    $(document).ready(function() {
        $('#example').DataTable()
    });
</script>


<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>

<script src="{{ URL::to('/') }}/assets1/assets/js/app.js"></script>

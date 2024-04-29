@include('admin.layouts.app')
@yield('content')


<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Manage Marital Status</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Marital Status</li>
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
                                class="caption-subject font-dark sbold uppercase">Marital Status</span> </div>
                        <div class="actions"> <a href="{{ url('add_marital_status') }}"
                                class="btn btn-xs btn-success"><i class="glyphicon glyphicon-plus"></i> Add New
                                Marital Status</a>
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
                            <th>Marital Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($list_marital_status as $key => $list_marital_status_list)
                            <tr">

                                <td class=""> {{ $list_marital_status_list->lang }}</td>
                                <td class=""> {{ $list_marital_status_list->marital_status }}</td>
                                <td class="">
                                    <!-- Example single danger button -->

                                    <div class="col">
                                        <div class="dropdown ">
                                            <button type="button" class="btn btn-light"><a
                                                    href="{{ url('view_marital_status', $list_marital_status_list->id) }}"><i
                                                        class="lni lni-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-light"><a
                                                    href="{{ url('edit_marital_status', $list_marital_status_list->id) }}"><i
                                                        class='bx bx-edit me-0'></i>
                                            </button>
                                            <button type="button" class="btn btn-light "> <a
                                                    onclick="return confirm('Do you want to Confirm delete operation?')"
                                                    href="{{ url('/delete_marital_status', $list_marital_status_list->id) }}"><i
                                                        class="lni lni-trash"></i></a>
                                            </button>
                                        </div>
                                    </div>

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
app JS
<script src="{{ URL::to('/') }}/assets1/assets/js/app.js"></script>

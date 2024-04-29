@include('admin.layouts.app')
@yield('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">HOME</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">

                        <li class="breadcrumb-item active" aria-current="page">Degree Level</li>
                    </ol>
                </nav>
            </div>


        </div>
        @if (session()->has('message'))
            <div class="alert alert-success text-bg-success border-none">
                {{ session()->get('message') }}
            </div>
        @endif

        <!--end breadcrumb-->

        <div class="row">
            <div class=" col-md-12">
                <!-- Begin: life time stats -->
                <div class="portlet light portlet-fit portlet-datatable bordered">
                    <div class="portlet-title d-flex justify-content-between">
                        <div class=" caption"> <i class="icon-settings font-dark"></i> <span
                                class="caption-subject font-dark sbold uppercase">Degree Level</span> </div>
                        <div class="actions"> <a href="{{ url('add_degree_levels') }}" class="btn btn-xs btn-success"><i
                                    class="glyphicon glyphicon-plus"></i> Add New
                                Degree Level</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr />

        <div class="card-body ">
            <div class=" table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr role="row">
                            <th>S.No</th>
                            <th>id</th>
                            <th>Langauge</th>
                            <th>Degree Level</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($list_degree_levels as $key => $list_degree_levels_list)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $list_degree_levels_list->id }}</td>
                            <td>{{ $list_degree_levels_list->lang }}</td>
                            <td>{{ $list_degree_levels_list->degree_level }}</td>
                            <td>
                                    <!-- Example single danger button -->

                                    <button type="button" class="btn btn-light"><a
                                            href="{{ url('/view_degree_levels', $list_degree_levels_list->id) }}"><i
                                                class="lni lni-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-light"><a
                                            href="{{ url('/edit_degree_levels', $list_degree_levels_list->id) }}"><i
                                                class='bx bx-edit me-0'></i>
                                    </button>
                                    <button type="button" class="btn btn-light"> <a
                                            onclick="return confirm('Do you want to Confirm delete operation?')"
                                            href="{{ url('/delete_degree_levels', $list_degree_levels_list->id) }}"><i
                                                class="lni lni-trash"></i></a></button>
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

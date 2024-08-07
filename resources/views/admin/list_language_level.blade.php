@include('admin.layouts.app')
@yield('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Home</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Language Level</li>
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
                                class="caption-subject font-dark sbold uppercase">Language Level</span> </div>
                        <div class="actions"> <a href="{{ url('add_language_level') }}"
                                class="btn btn-xs btn-success mb-2"><i class="glyphicon glyphicon-plus "></i> List Language Level</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Language</th>
                                <th>Language Level</th>
                                <th>Action</th>

                            </tr>
                            <tbody>
                        </thead>
                       
                            @foreach ($list_language_level as $key => $language_level_list)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $language_level_list->lang }}</td>
                                    <td>{{ $language_level_list->language_level }}</td>
                                    <td>
                                        <div class="col">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-light"><a
                                                        href="{{ url('/view_language_level', $language_level_list->id) }}"><i
                                                            class="lni lni-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light"><a
                                                        href="{{ url('/edit_language_level', $language_level_list->id) }}"><i
                                                            class='bx bx-edit me-0'></i>
                                                </button>
                                                <button type="button" class="btn btn-light"> <a
                                                        onclick="return confirm('Do you want to Confirm delete operation?')"
                                                        href="{{ url('/delete_language_level', $language_level_list->id) }}"><i
                                                            class="lni lni-trash"></i></a></button>


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
<!--app JS-->
<script src="{{ URL::to('/') }}/assets1/js/app.js"></script>
</body>

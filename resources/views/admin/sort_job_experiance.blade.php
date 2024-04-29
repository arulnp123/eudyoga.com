@include('admin.layouts.app')
@yield('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><a href="{{ url('dashboard_admin') }}">Home</a></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><a
                                href="{{ url('list_job_experiance') }}">
                                Job Experience
                            </a></li>

                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card pb-5" style="width: 100%">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body d-flex align-items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                    <path
                        d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                </svg>
                <p class="card-text h5 ms-2">SORT JOB EXPERIENCE</p>
            </div>

            <ul class="nav nav-tabs">

                <li class="nav-item">
                    <a class="nav-link active ms-3 " aria-current="page" href="#">Short Job Experience</a>
                </li>

            </ul>

            <div>
                <p class="h4 m-2 mt-5 ps-2">Drag and Drop To Job Experience</p>
            </div>
            <select name="example_length" aria-controls="example" class="form-select form-select-sm  mt-3 p-2 mb-3">

                <option selected='Select Langauge'>Select Langauge</option>
                <option>English</option>

            </select>

            @foreach($sort_job_experiance as $key=>$sort_job_experiance_list)

            <ul class="list-group ">
                <li class="list-group-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-chevron-expand" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708m0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708" />

                    </svg> {{ $sort_job_experiance_list->job_experience}}</li>

            </ul>
             @endforeach


        </div>


    </div>
</div>



</body>
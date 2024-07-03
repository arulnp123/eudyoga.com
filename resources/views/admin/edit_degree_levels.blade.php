@include('admin.layouts.app')
@yield('content')

<body class="bg-theme bg-theme2">
    <!--wrapper-->
    <div class="wrapper">

        <!--start header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"><a href="{{ url('dashboard_admin') }}">Home</a></div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">

                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="{{ url('list_degree_levels') }}"> Degree Level
                                    </a></li>

                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->



                <div class="card pb-3" style="width: 100%">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body d-flex align-items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                        </svg>
                        <p class="card-text h4 ms-2">DEGREE LEVEL FORM</p>
                    </div>

                    <ul class="nav nav-tabs ps-2">

                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="#">
                                Deatails
                            </a>
                        </li>

                    </ul>

                    <div class="ps-4 pt-4">

                        <p class="h6">Langauge</p>
                    </div>
                    <form action="{{ url('update_degree_levels') }}" method="POST">
                        @csrf
                        @foreach ($edit_degree_levels as $key => $edit_degree_levels_list)
                            <input type="hidden" id="id" name="id"
                                value="{{ $edit_degree_levels_list->id }}">
                            <select name="lang" aria-controls="example" class="form-select form-select-sm  mt-3">
                                <option value="{{ $edit_degree_levels_list->lang }}">
                                    {{ $edit_degree_levels_list->lang }}</option>
                            </select>

                            <div class="input-group mt-4 p-2">

                                <select name="degree_level" id="degree_level" required
                                    class="form-control form-select" aria-label="Default select example">
                                    <option value=""selected>Degree Level</option>
                                    @foreach ($get_degree_level as $key => $get_degree_level_list)
                                        <option @if ($get_degree_level_list->degree_level == $edit_degree_levels_list->degree_level) selected @endif
                                            value="{{ $get_degree_level_list->degree_level }}">
                                            {{ $get_degree_level_list->degree_level }}</option>
                                    @endforeach

                                </select>

                            </div>


                            <div>
                                <p class="h6 ps-3 mt-3">is default ?</p>
                            </div>

                            <div class=" d-flex">
                                <div class="form-check ms-3 ">
                                    <label class="form-check-label " for="is_default">
                                        <input type="radio" @if ($edit_degree_levels_list->is_default == 1) checked @endif
                                            name="is_default" id="is_default2" value="1">
                                        Yes
                                    </label>
                                </div>
                                <label>
                                </label>
                                <div class="form-check ms-3">
                                    <label class="form-check-label" for="is_default">
                                        <input type="radio" @if ($edit_degree_levels_list->is_default == 0) checked @endif
                                            name="is_default" id="is_default0" value="0">
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="pt-3	">
                                <div>
                                    <p class="h6 ps-3">Active ?</p>
                                </div>

                                <div class=" d-flex ">
                                    <div class="form-check ms-4 ">
                                        <label class="form-check-label " name="is_active" id="is_active1">
                                            <input type="radio" @if ($edit_degree_levels_list->is_active == 1) checked @endif
                                                name="is_active" id="is_active1" value="1">

                                            Active
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <!-- <input class="form-check-input " type="radio" name="is_active" id="is_active2"
                                            value="0"> -->
                                        <label class="form-check-label" for="is_active2">
                                            <input type="radio" @if ($edit_degree_levels_list->is_active == 0) checked @endif
                                                name="is_active" id="is_active2" value="0">
                                            in Active
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-3 mt-4">
                                <button name="submit" type="submit" class="btn btn-secondary">
                                    update
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right-circle-fill ps-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>

                                </button>
                            </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

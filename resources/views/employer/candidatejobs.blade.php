@include('employer/layout.app')
@yield('content')

    <section class="gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="filter_search_opt">
                        <a href="javascript:void(0);" onclick="openFilterSearch()">Search Property<i
                                class="ml-2 ti-menu"></i></a>
                    </div>
                </div>
            </div>

            <div class="listpgWraper">
            <div class="container">
                <form action="https://eudyoga.com/job-seekers" method="get">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="sidebar">
                                <input type="hidden" name="search" value="" />
                                <div class="widget">
                                    <h4 class="widget-title">Country</h4>
                                    <ul class="optionlist view_more_ul">
                                        {{-- @foreach ($countries as $key => $countrylist)
                                            <li>
                                                <input type="checkbox" name="country" id="{{ $countrylist->id }}"
                                                    value="{{ $countrylist->country }}">
                                                <label for="{{ $countrylist->id }}"></label>
                                                {{ $countrylist->country }}
                                            </li>
                                        @endforeach --}}
                                    </ul>
                                    <span class="text text-primary view_more hide_vm" id="country"
                                        onclick="country()">View More</span>
                                </div>

                                <div class="widget">
                                    <h4 class="widget-title">By State</h4>
                                    <ul class="statelistt view_more_ul block">
                                        {{-- @foreach ($states as $key => $statelist)
                                            <li>
                                                <input type="checkbox" name="state" id="{{ $statelist->id }}"
                                                    value="{{ $statelist->state_name }}">
                                                <label for="{{ $statelist->id }}"></label>
                                                {{ $statelist->state_name }}

                                            </li>
                                        @endforeach --}}
                                    </ul>
                                    <span class="text text-primary view_more hide_vm" id="state"
                                        onclick="state()">View More</span>
                                </div>

                                <div class="widget">
                                    <h4 class="widget-title">By City</h4>
                                    <ul class="citylistt view_more_ul">
                                        {{-- @foreach ($cities as $key => $citylist)
                                            <li>
                                                <input type="checkbox" name="citylist" id="{{ $citylist->id }}"
                                                    value="{{ $citylist->city }}">
                                                <label for="{{ $citylist->id }}"></label>
                                                {{ $citylist->city }}

                                            </li>
                                        @endforeach --}}
                                    </ul>
                                    <span class="text text-primary view_more hide_vm" id="city"
                                        onclick="city()">View More</span>
                                </div>

                                <div class="widget ">
                                    <h4 class="widget-title">By Experiance</h4>
                                    <ul class="job_experienceslistt view_more_ul">
                                        {{-- @foreach ($job_experiences as $key => $job_experienceslist)
                                            <li>
                                                <input type="checkbox" name="job_experience"
                                                    id="{{ $job_experienceslist->id }}"
                                                    value="{{ $job_experienceslist->job_experience }}">
                                                <label for="{{ $job_experienceslist->id }}"></label>
                                                {{ $job_experienceslist->job_experience }}
                                            </li>
                                        @endforeach --}}
                                    </ul>

                                    <span class="text text-primary view_more hide_vm" id="job_experience"
                                        onclick="job_experience()">View More</span>

                                </div>

                                <div class="widget ">
                                    <h4 class="widget-title">By Career Level</h4>
                                    <ul class="careerlevell view_more_ul">
                                        {{-- @foreach ($career_levels as $key => $career_levellist)
                                            <li><input type="checkbox" name="career_level" id="{{ $career_levellist->id }}"
                                                    value="{{ $career_levellist->career_level }}">
                                                <label for="{{ $career_levellist->id }}"></label>
                                                {{ $career_levellist->career_level }}

                                            </li>
                                        @endforeach --}}
                                    </ul>
                                    <span class="text text-primary view_more hide_vm" id="career"
                                        onclick="careerlevel()">View More</span>
                                </div>

                                <div class="widget ">
                                    <h4 class="widget-title"> By Gender</h4>
                                    <ul class="genderlistt view_more_ul">
                                        {{-- @foreach ($genders as $key => $genderlist)
                                            <li>
                                                <input type="checkbox" name="gender" id="{{ $genderlist->id }}"
                                                    value="{{ $genderlist->gender }}">
                                                <label for="{{ $genderlist->id }}"></label>
                                                {{ $genderlist->gender }}
                                            </li>
                                        @endforeach --}}
                                    </ul>
                                    <span class="text text-primary view_more hide_vm" id="gender"
                                        onclick="gender()">View More</span>
                                </div>

                                <div class="widget ">
                                    <h4 class="widget-title"> By Industry</h4>
                                    <ul class="industrieslistt view_more_ul">
                                        {{-- @foreach ($industries as $key => $industrieslist)
                                            <li>
                                                <input type="checkbox" name="industry" id="{{ $industrieslist->id }}"
                                                    value="{{ $industrieslist->industry }}">
                                                <label for="{{ $industrieslist->id }}"></label>
                                                {{ $industrieslist->industry }}

                                            </li>
                                        @endforeach --}}
                                    </ul>
                                    <!-- title end -->
                                    <span class="text text-primary view_more hide_vm" id="industry"
                                        onclick="industry()">View More</span>
                                </div>

                                <div class="widget ">
                                    <h4 class="widget-title">By Skill</h4>
                                    <ul class="job_skillist view_more_ul">
                                        {{-- @foreach ($job_skills as $key => $job_skilllist)
                                            <li>
                                                <input type="checkbox" name="job_skill" id="{{ $job_skilllist->id }}"
                                                    value="{{ $job_skilllist->job_skill }}">
                                                <label for="{{ $job_skilllist->id }}"></label>
                                                {{ $job_skilllist->job_skill }}
                                            </li>
                                        @endforeach --}}
                                    </ul>
                                    <!-- title end -->
                                    <span class="text text-primary view_more hide_vm" id="job_skill"
                                        onclick="skill()">View More</span>
                                </div>

                                <div class="widget ">
                                    <h4 class="widget-title">Jobs By Functional Areas</h4>
                                    <ul class="functional_areaslistt view_more_ul">
                                        {{-- @foreach ($functional_areas as $key => $functional_areaslist)
                                            <li>
                                                <input type="checkbox" name="functional_areas"
                                                    id="{{ $functional_areaslist->id }}"
                                                    value="{{ $functional_areaslist->functional_area }}">
                                                <label for="{{ $functional_areaslist->id }}"></label>
                                                {{ $functional_areaslist->functional_area }}
                                        @endforeach --}}
                                    </ul>
                                    <span class="text text-primary view_more hide_vm" id="functional_area"
                                        onclick="functionalarea()">View More</span>
                                </div>

                                <div class="widget">
                                    <h4 class="widget-title">Salary Range</h4>
                                    <div class="form-group">
                                        <input class="form-control" id="current_salary" placeholder="Current Salary"
                                            name="current_salary" type="number">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="expected_salary" placeholder="Expected Salary"
                                            name="expected_salary" type="number">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="salary_currency" name="salary_currency">
                                            <option value="">Select Salary Currency</option>

                                            <option value="INR" selected="selected">INR</option>
                                        </select>
                                    </div>
                                    <div class="searchnt">
                                        <button type="submit" class="btn"><i class="fa fa-search"
                                                aria-hidden="true"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            @if (count($getjobs) > 0)
                                <ul class="searchList">
                                    @foreach ($getjobs as $user)
                                        <li class="">
                                            <h1>{{ $user->city }}</h1>
                                            <div class="row">
                                                <div class="col-lg-10 col-md-8">
                                                    <div class="jobimg"><img src="assets/images/favicon.png">
                                                    </div>
                                                    <div class="jobinfo">
                                                        <h3><a href="job/Relationship%20Manager.html"
                                                                title="Relationship Manager">{{ $user->functional_area }}</h3>
                                                        <div class="companyName"><a href="company/srinivas-92.html"
                                                                title="Kalyani Motors">{{ $user->state_name }}</a></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-lg-2.5">
                                                    {{-- <div class="listbtn"><a
                                                            href="{{ url('candiate_profile', $user->id) }}">ViewProfile</a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            @else
                                <section class="d-flex justify-content-center align-items-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
                                                        <i class="fa fa-exclamation-circle text-danger fa-2x"></i>
                                                    </h2>
                                                    <h3 class="h2">Oops! </h3>
                                                    <p class="mb-3" style="color: red">Sorry No Candidate Profile </p>
                                                    <a href="{{ url('employer_index') }}">
                                                        <Button class="btn btn-primary">Back</Button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endif
                            {{-- <li class="pagination float-right mb-5">
                                {{ $users->links() }}
                            </li> --}}

                            {{-- <div class="topstatinfo">
                                Showing Jobs : {{ $users->currentPage() * $users->perPage() }} Total {{ $activeusers }}
                            </div> --}}
                            </li>
                        </ul>
                </form>
            </div>
        </div>
        </div>
    </section>

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>
@push('page_scripts')
    <script>
        function edit_category(id, category_name, status, ) {
            $("#editcategoryname").val(category_name);
            $("#editstatus").val(status);
            $("#category_id").val(id);
            $("#editcategory").modal("show");
        }
    </script>
@endpush

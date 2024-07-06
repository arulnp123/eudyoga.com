@include('user/layouts.app')


@yield('content')

<form action="{{ url('job_search') }}" method="get">
    <!-- Page Title start -->
    @csrf
    <div class="container">
        <div class="pageSearch">

            <div class="row">
                <div class="col-lg-7">

                    <h3 class="mb-3">One million success job stories. <span>Start yours today.</span></h3>

                    <div class="searchform">
                        <div class="input-group">
                            <input type="text" name="search" id="jbsearch" value="" class="form-control"
                                placeholder="Enter Skills or job title" autocomplete="off" />

                            <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page Title end -->
</form>



<!-- Inner Page Title end -->

<div class="listpgWraper">

    <div class="container">



        <form action="{{ url('job_search') }}" method="get">

            <!-- Search Result and sidebar start -->

            <div class="row">

                <div class="col-lg-3">
                    <div class="jobreqbtn">
                        <a class="btn btn-job-alert-disabled" disabled href="javascript:;">
                            <i class="fa fa-bell" style="font-size:1.125rem;"></i> Save Job Alert</a>


                       <!-- <a href="#" class="btn"><i class="fa fa-file-text" aria-hidden="true"></i>
                            Upload Your Resume</a>-->
                    </div>
                    <!-- Side Bar start -->
                    <div class="sidebar">
                        <input type="hidden" name="search" value="" />

                        <!--Jobs By Title-->
                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Title</h4>
                            <ul class="optionlist view_more_ul">
                                @foreach ($job_titles as $job_titles_list)
                                    <li>
                                        <input type="checkbox" name="job_title" id="{{ $job_titles_list->id }}"
                                            value="{{ $job_titles_list->job_title }}">
                                        <label for="{{ $job_titles_list->id }}"></label>
                                        {{ $job_titles_list->job_title }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="load"
                                onclick="toggleCheckboxes()">View More</span>

                        </div>




                        <!-- Jobs By Country -->

                        <div class="widget ">
                            <h4 class="widget-title">Country</h4>
                            <ul class="countrylist view_more_ul">
                                @foreach ($countries as $key => $countrylist)
                                    <li>
                                        <input type="checkbox" name="country" id="{{ $countrylist->id }}"
                                            value="{{ $countrylist->country }}">
                                        <label for="{{ $countrylist->id }}"></label>
                                        {{ $countrylist->country }}
                                    </li>
                                @endforeach

                            </ul>

                            <span class="text text-primary view_more hide_vm" id="country"
                                onclick="country()">View More</span>

                        </div>


                        <!-- Jobs By Country end-->


                        <!-- Jobs By State -->
                        <div class="widget ">
                            <h4 class="widget-title">By State</h4>
                            <ul class="statelist view_more_ul">
                                @foreach ($states as $key => $statelist)
                                    <li>
                                        <input type="checkbox" name="state" id="{{ $statelist->id }}"
                                            value="{{ $statelist->state_name }}">
                                        <label for="{{ $statelist->id }}"></label>
                                        {{ $statelist->state_name }}

                                    </li>
                                @endforeach

                            </ul>

                            <span class="text text-primary view_more hide_vm" id="state"
                                onclick="state()">View More</span>

                        </div>

                        <!-- Jobs By State end-->


                        <!-- Jobs By City -->

                        <div class="widget ">
                            <h4 class="widget-title">By City</h4>
                            <ul class="citylist view_more_ul">
                                @foreach ($cities as $key => $citylist)
                                    <li>
                                        <input type="checkbox" name="citylist" id="{{ $citylist->id }}"
                                            value="{{ $citylist->city }}">
                                        <label for="{{ $citylist->id }}"></label>
                                        {{ $citylist->city }}

                                    </li>
                                @endforeach

                            </ul>

                            <span class="text text-primary view_more hide_vm" id="city"
                                onclick="city()">View More</span>

                        </div>

                        <!-- Jobs By City end-->
                        <!-- Jobs By Title -->



                        <!-- Jobs By Experience -->
                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Experiance</h4>
                            <ul class="job_experienceslist view_more_ul">
                                @foreach ($job_experiences as $key => $job_experienceslist)
                                    <li>
                                        <input type="checkbox" name="job_experience"
                                            id="{{ $job_experienceslist->id }}"
                                            value="{{ $job_experienceslist->job_experience }}">
                                        <label for="{{ $job_experienceslist->id }}"></label>
                                        {{ $job_experienceslist->job_experience }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="job_experiences"
                                onclick="boxes()">View More</span>

                        </div>


                        {{-- Jobs By Job Type --}}
                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Job Type</h4>
                            <ul class="job_typeslist view_more_ul">
                                @foreach ($job_types as $key => $job_typeslist)
                                    <li>
                                        <input type="checkbox" name="job_type" id="{{ $job_typeslist->id }}"
                                            value="{{ $job_typeslist->job_type }}">
                                        <label for="{{ $job_typeslist->id }}"></label>
                                        {{ $job_typeslist->job_type }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="job_type"
                                onclick="jobtype()">View More</span>

                        </div>

                        <!-- Jobs By Job Type end -->

                        <!-- Jobs By Job Shift -->

                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Job Shift</h4>
                            <ul class="job_shiftslist  view_more_ul">
                                @foreach ($job_shifts as $key => $job_shiftslist)
                                    <li>
                                        <input type="checkbox" name="job_shift" id="{{ $job_shiftslist->id }}"
                                            value="{{ $job_shiftslist->job_shift }}">
                                        <label for="{{ $job_shiftslist->id }}"></label>
                                        {{ $job_shiftslist->job_shift }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="job_shift"
                                onclick="jobshift()">View More</span>

                        </div>

                        <!-- Jobs By Job Shift end -->

                        <!-- Jobs By Career Level -->
                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Career Level</h4>
                            <ul class="careerlevel view_more_ul">
                                @foreach ($career_levels as $key => $career_levellist)
                                    <li><input type="checkbox" name="career_level" id="{{ $career_levellist->id }}"
                                            value="{{ $career_levellist->career_level }}">
                                        <label for="{{ $career_levellist->id }}"></label>
                                        {{ $career_levellist->career_level }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="career"
                                onclick="careerlevel()">View More</span>

                        </div>

                        <!-- Jobs By Career Level end -->


                        <!-- Jobs By Degree Level -->

                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Degree Level</h4>
                            <ul class="degree_levelslist view_more_ul">
                                @foreach ($degree_levels as $degree_levelslist)
                                    <li>
                                        <input type="checkbox" name="degree_level" id="{{ $degree_levelslist->id }}"
                                            value="{{ $degree_levelslist->degree_level }}">
                                        <label for="{{ $degree_levelslist->id }}"></label>
                                        {{ $degree_levelslist->degree_level }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="degree_level"
                                onclick="degreelevel()">View More</span>

                        </div>

                        <!-- Jobs By Degree Level end -->


                        <!-- Jobs By Gender -->
                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Gender</h4>
                            <ul class="genderlist view_more_ul">
                                @foreach ($genders as $key => $genderlist)
                                    <li>
                                        <input type="checkbox" name="gender" id="{{ $genderlist->id }}"
                                            value="{{ $genderlist->gender }}">
                                        <label for="{{ $genderlist->id }}"></label>
                                        {{ $genderlist->gender }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="gender"
                                onclick="gender()">View More</span>

                        </div>

                        <!-- Jobs By Gender end -->



                        <!-- Jobs By Industry -->

                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Industry</h4>
                            <ul class="industrieslist view_more_ul">
                                @foreach ($industries as $key => $industrieslist)
                                    <li>
                                        <input type="checkbox" name="industry" id="{{ $industrieslist->id }}"
                                            value="{{ $industrieslist->industry }}">
                                        <label for="{{ $industrieslist->id }}"></label>
                                        {{ $industrieslist->industry }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="industry"
                                onclick="industry()">View More</span>

                        </div>


                        <!-- Jobs By Industry end -->

                        <!-- Jobs By Skill -->

                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Skill</h4>
                            <ul class="job_skilllist view_more_ul">
                                @foreach ($job_skills as $key => $job_skilllist)
                                    <li>
                                        <input type="checkbox" name="job_skill" id="{{ $job_skilllist->id }}"
                                            value="{{ $job_skilllist->job_skill }}">
                                        <label for="{{ $job_skilllist->id }}"></label>
                                        {{ $job_skilllist->job_skill }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="job_skill"
                                onclick="skill()">View More</span>

                        </div>

                        <!-- Jobs By Industry end -->



                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Functional Areas</h4>
                            <ul class="functional_areaslist view_more_ul">
                                @foreach ($functional_areas as $key => $functional_areaslist)
                                    <li>
                                        <input type="checkbox" name="functional_areas"
                                            id="{{ $functional_areaslist->id }}"
                                            value="{{ $functional_areaslist->functional_area }}">
                                        <label for="{{ $functional_areaslist->id }}"></label>
                                        {{ $functional_areaslist->functional_area }}
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="functional_area"
                                onclick="functionalarea()">View More</span>

                        </div>



                        <!-- Top Companies -->

                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Company</h4>
                            <ul class="companieslist view_more_ul">
                                @foreach ($companies as $key => $companieslist)
                                    <li>
                                        <input type="checkbox" name="functional_areas" id="{{ $companieslist->id }}"
                                            value="{{ $companieslist->c_name }}">
                                        <label for="{{ $companieslist->id }}"></label>
                                        {{ $companieslist->c_name }}
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="companies"
                                onclick="company()">View More</span>

                        </div>

                        <!-- Top Companies end -->

                        <!-- Salary -->
                        <div class="widget">
                            <h4 class="widget-title">Salary Range</h4>
                            <div class="form-group">
                                <input class="form-control" id="salary_from" placeholder="Salary From"
                                    name="salary_from" type="number">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="salary_to" placeholder="Salary To" name="salary_to"
                                    type="number">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="salary_currency" name="salary_currency">
                                    <option value="" selected="selected">Select Salary Currency</option>
                                    <option value="INR">INR</option>

                                </select>
                            </div>
                            <!-- Salary end -->

                            <!-- button -->
                            <div class="searchnt">
                                <button type="submit" class="btn"><i class="fa fa-search"
                                        aria-hidden="true"></i> Search Jobs</button>
                            </div>
                            <!-- button end-->
                        </div>
                        <!-- Side Bar end -->
                    </div>
                </div>

                <div class="col-lg-9">

                    <!-- Search List -->

                    <!--<div class="topstatinfo">-->
                    <!--    Showing Jobs : 1 - {{ $activejobs }}-->
                    <!--</div>-->

                    <ul class="searchList">


                        @foreach ($jobs1 as $jobs2)
                            <li class="">

                                <div class="row">


                                    <div class="col-lg-10 col-md-8">
                                        <div class="jobimg"><img src="{{ url('assets/no-image.jpg') }}">
                                        </div>
                                        <div class="jobinfo">
                                            <h3><a href="job/Relationship%20Manager.html"
                                                    title="Relationship Manager">{{ $jobs2->title }}</h3>
                                            <div class="desi"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $jobs2->state_name }},{{ $jobs2->city }}
                                            </div>

                                            <div class="companyName"><a href="company/srinivas-92.html"
                                                    title="Kalyani Motors">{{ $jobs2->c_name }}</a></div>

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-lg-2.5">
                                        <div class="listbtn"><a
                                                href="{{ url('view_detail', $jobs2->id) }}">ViewDetials</a>
                                        </div>
                                    </div>
                                </div>




                                <div class="content">


                                    <p class="more">{{ $jobs2->description }}</p>


                                </div>


                            </li>
                        @endforeach





                    </ul>

                    <li class="pagination float-right mb-5">
                        {{ $jobs1->links() }}
                    </li>


                    <div class="topstatinfo">
                        Showing Jobs : {{ $jobs1->currentPage() * $jobs1->perPage() }} Total {{ $activejobs }}
                    </div>



                    <div class="jobint text-center mt-5"><img
                            src="{{ URL::to('/') }}/public/assets/images/banner1.jpg">
                    </div>





                    <!-- Pagination Start -->

                    <div class="pagiWrap">

                        <div class="row">

                            <div class="col-lg-5">

                                {{-- <div class="showreslt">

                                    Showing Jobs : 1 - 8 Total 8

                                </div> --}}

                            </div>

                            <div class="col-lg-7 text-right">





                            </div>

                        </div>

                    </div>

                    <!-- Pagination end -->





                </div>

            </div>

        </form>

    </div>

</div>

<div class="modal fade" id="show_alert" role="dialog">

    <div class="modal-dialog">



        <!-- Modal content-->

        <div class="modal-content">

            <form id="submit_alert">

                <input type="hidden" name="_token" value="wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8">
                <input type="hidden" name="search" value="">

                <input type="hidden" name="country_id" value="">

                <input type="hidden" name="state_id" value="">

                <input type="hidden" name="city_id" value="">

                <input type="hidden" name="functional_area_id" value="">

                <div class="modal-header">

                    <h4 class="modal-title">Job Alert</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <div class="modal-body">



                    <h3>Get the latest <strong></strong> jobs sent straight to your inbox</h3>



                    <div class="form-group">

                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="Enter your Email" value="">

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>



    </div>

</div>


<script>
    $(document).ready(function() {
        toggleCheckboxes();
        country();
        state();
        city();
        boxes();
        jobtype();
        jobshift();
        careerlevel();
        degreelevel();
        gender();
        industry();
        skill();
        functionalarea();
        company();

    });

    function toggleCheckboxes() {
        var checkboxes = document.querySelectorAll('.optionlist input[type="checkbox"]');
        var loadBtn = document.getElementById('load');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function country() {
        var checkboxes = document.querySelectorAll('.countrylist input[type="checkbox"]');
        var loadBtn = document.getElementById('country');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function state() {
        var checkboxes = document.querySelectorAll('.statelist input[type="checkbox"]');
        var loadBtn = document.getElementById('state');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function city() {
        var checkboxes = document.querySelectorAll('.citylist input[type="checkbox"]');
        var loadBtn = document.getElementById('city');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function boxes() {
        var checkboxes = document.querySelectorAll('.job_experienceslist input[type="checkbox"]');
        var loadBtn = document.getElementById('job_experiences');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });

        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function jobtype() {
        var checkboxes = document.querySelectorAll('.job_typeslist input[type="checkbox"]');
        var loadBtn = document.getElementById('job_type');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });

        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function jobshift() {
        var checkboxes = document.querySelectorAll('.job_shiftslist input[type="checkbox"]');
        var loadBtn = document.getElementById('job_shift');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });

        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };



    function careerlevel() {
        var checkboxes = document.querySelectorAll('.careerlevel input[type="checkbox"]');
        var loadBtn = document.getElementById('career');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });

        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };


    function degreelevel() {
        var checkboxes = document.querySelectorAll('.degree_levelslist input[type="checkbox"]');
        var loadBtn = document.getElementById('degree_level');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function gender() {
        var checkboxes = document.querySelectorAll('.genderlist input[type="checkbox"]');
        var loadBtn = document.getElementById('gender');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function industry() {
        var checkboxes = document.querySelectorAll('.industrieslist input[type="checkbox"]');
        var loadBtn = document.getElementById('industry');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });


        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function skill() {
        var checkboxes = document.querySelectorAll('.job_skilllist input[type="checkbox"]');
        var loadBtn = document.getElementById('job_skill');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });


        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function functionalarea() {
        var checkboxes = document.querySelectorAll('.functional_areaslist input[type="checkbox"]');
        var loadBtn = document.getElementById('functional_area');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });


        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function company() {
        var checkboxes = document.querySelectorAll('.companieslist input[type="checkbox"]');
        var loadBtn = document.getElementById('companies');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });

        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };
</script>



<script type="text/javascript">
    $('#jbsearch').on('keyup', function() {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('search') }}',
            data: {
                'search': $value
            },
            success: function(data) {
                console.log(data);
                $('.searchList').html(data);
            }
        });
    })
</script>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>







<script>
    $(document).ready(function() {
        var showChar = 150; // Set the number of characters to show initially
        var ellipsestext = "...";
        var moretext = "Read more";
        var lesstext = "Read less";


        $('.more').each(function() {
            var content = $(this).html();

            if (content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);

                var html = c + '<span class="moreellipses">' + ellipsestext +
                    '&nbsp;</span><span class="morecontent"><span>' + h +
                    '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                $(this).html(html);
            }
        });

        $(".morelink").click(function() {
            if ($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
</script>
<style>
    .morecontent span {
        display: none;
    }

    .morelink {
        display: block;
    }
</style>









<script type="text/javascript">
    $('#jbsearch').on('keyup', function() {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('search') }}',
            data: {
                'search': $value
            },
            success: function(data) {
                console.log(data);
                $('.searchList').html(data);
            }
        });
    })
</script>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>





<div class="footerWrap">
    <div class="container">
        <div class="row">

            <!--Quick Links-->
            <div class="col-md-3 col-sm-6">
                <h5>Quick Links</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="index">Home</a></li>
                    <li><a href="contact_us">Contact Us</a></li>
                    <li class="postad"><a href="login.html">Post a Job</a></li>
                    <li><a href="faq">FAQs</a></li>

                    <li class=""><a href="about_us">About Us</a></li>

                    <li class=""><a href="cms/Terms_And_Conditions.html">Terms &amp; Conditions</a></li>

                    <!--<li class=""><a href="cms/Privacy_Policy.html">Privacy Policy</a></li>-->

                    <!--<li class=""><a href="cms/Refund_Policy.html">Refund_Policy</a></li>-->
                    <!--                    <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobs By Functional Area</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="jobs6e73.html?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial
                            Services</a></li>
                    <li><a href="jobs073c.html?functional_area_id%5B%5D=53">Interior Designers &amp; Architects</a>
                    </li>
                    <li><a href="jobs3de1.html?functional_area_id%5B%5D=17">Client Services &amp; Customer Support</a>
                    </li>
                    <!--<li><a href="jobsa6eb.html?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>-->
                    <li><a href="jobs222d.html?functional_area_id%5B%5D=1">Accountant</a></li>
                    <!--<li><a href="jobsa0ca.html?functional_area_id%5B%5D=127">SMO</a></li>-->
                    <li><a href="jobs14fd.html?functional_area_id%5B%5D=68">Manufacturing &amp; Operations</a></li>
                    <!--<li><a href="jobsd4f3.html?functional_area_id%5B%5D=112">Retail</a></li>-->
                    <!--<li><a href="jobsc39a.html?functional_area_id%5B%5D=118">Sales</a></li>-->
                    <li><a href="jobs099f.html?functional_area_id%5B%5D=13">Business Development</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-12">
                <h5>Jobs By Industry</h5>
                <ul class="quicklinks">
                    <li><a href="#">BCS</a></li>
                    <li><a href="#">Siddhran
                        </a></li>
                    <li><a href="#">Recrument </a></li>
                    <li><a href="#">Pragna solution</a>
                    </li>
                    <li><a href="#">Arul Rubbers pvt ltd</a></li>
                    <li><a href="#">Kalyani Moters</a></li>

                </ul>
                <!--<div class="phone"> <a href="tel:+918884442935">+91 888-444-2935</a></div>-->
                <!--<div class="email"> <a href="mailto:jobdesk@eudyoga.com">jobdesk@eudyoga.com</a> </div>-->
            </div>



            <div class="col-md-3 col-sm-12">
                <h5>Contact Us</h5>
                <div class="phone"> <a href="tel:+91 888-444-2936">+91 888-444-2936</a></div>
                <div class="email"> <a href="mailto:hrdesk@eudyoga.com">hrdesk@eudyoga.com</a> </div>
                <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022 India</div>

                <!-- Social Icons -->
                <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067"
                        target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/e_udyoga" target="_blank"><i class="fab fa-twitter-square"
                            aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/eudyoga/" target="_blank"><i class="fab fa-instagram"
                            aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube-square"
                            aria-hidden="true"></i></a>
                </div>
                <!-- Social Icons end -->

            </div>


        </div>
    </div>
</div>

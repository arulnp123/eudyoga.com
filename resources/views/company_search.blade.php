@include('layouts.app')

@yield('content')

<div class="listpgWraper">
    <div class="container">
        <div class="topstatinfo">
            {{-- Showing Jobs : 1 -   --}}
        </div>
        <ul class="row compnaieslist">

            @foreach ($company_search as $companies_list)
                <li class="col-lg-3 col-md-6">
                    <div class="empint">
                        <a href="{{ url('company_public_profile/{id}',$companies_list->id) }}" title="Galaxy Technology">
                            <div class="emptbox">
                                <div class="comimg"><img
                                        src="assets/no-image.jpg">
                                </div>
                                <div class="text-info-right">
                                    <h4>{{ $companies_list->c_name }}</h4>
                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i>
                                        {{ $companies_list->location }}</div>
                                </div>

                            </div>
                            <div class="col-lg-10 col-md-10">
                                <div class="btn"><a
                                        href="{{ url('company_public_profile', $companies_list->id) }}"><i
                                            class="fas fa-briefcase"></i>  Open Jobs</a>
                                </div>
                            </div>
                            {{-- <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 0 Open Jobs</div> --}}
                        </a>
                    </div>

                </li>
            @endforeach




        </ul>
        <li class="pagination float-right">
            {{ $company_search->links() }}
        </li>

        <div class="topstatinfo">
            {{-- Showing Jobs : 1 -  --}}
        </div>


    </div>
</div>
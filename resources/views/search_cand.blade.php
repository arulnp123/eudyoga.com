@include('layouts.app')

@yield('content')


<div class="col-lg-9">

                    <!-- Search List -->

                    {{-- <div class="topstatinfo">
                        Showing Jobs :  {{ $users->currentPage() * $users->perPage() }} - {{ $activeusers }}
                    </div> --}}

                    <ul class="searchList">


                        @foreach ($search_cand as $user)
                            <li class="">

                                <div class="row">


                                    <div class="col-lg-10 col-md-8">
                                        <div class="jobimg"><img
                                                src="http://localhost/eudyoga.in/public/assets/company_logos/guru-swamy-1702037951-933.jpg">
                                        </div>
                                        <div class="jobinfo">
                                            <h3><a href="job/Relationship%20Manager.html"
                                                    title="Relationship Manager">{{ $user->first_name }}</h3>
                                            <div class="companyName"><a href="company/srinivas-92.html"
                                                    title="Kalyani Motors">{{ $user->street_address }}</a></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-lg-2.5">
                                        <div class="listbtn"><a
                                                href="{{ url('user_profile', $user->id) }}">ViewProfile</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p>{{ $user->description }}</p> --}}
                            </li>
                        @endforeach

                    </ul>

                    <li class="pagination float-right mb-5">
                        {{ $search_cand->links() }}
                    </li>

                    <div class="topstatinfo">
                        Showing Jobs -
                    </div>


                    
            </div>
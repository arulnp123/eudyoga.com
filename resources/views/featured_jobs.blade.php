@include('User/layouts.app')

@yield('content')



<form action="{{url('job_search')}}" method="get">
    <!-- Page Title start -->
    <div class="container">
        <div class="pageSearch">

            <div class="row">
                <div class="col-lg-7">

                    <h3 class="mb-3">One million success job stories. <span>Start yours today.</span></h3>

                    <div class="searchform">
                        <div class="input-group">
                            <input type="text" name="search" id="jbsearch" value="" class="form-control "
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
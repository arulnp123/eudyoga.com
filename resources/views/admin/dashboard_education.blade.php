@extends('Admin/layouts.app')
@section('content')
    <style>
        /* Add CSS styles for the button */
        #addCategoryButton {
            background-color: royalblue;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Categories</h3>
                <button id="addCategoryButton">
                    <a href="{{ url('addeducation') }}" style="color: white; text-decoration: none;">
                        Add Education
                    </a>
                </button>
                <div class="text">Add your Education</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>Job Education</h4>

                            </div>

                            <div class="widget-content">
                                <div class="table-outer">
                                    <table class="default-table manage-job-table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Education Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          @foreach($dashboard_education as $education)
                                            <tr>
                                                <td>{{ $education->id }}</td>
                                                <td class="trans-id">{{ $education->name }}</td>
                                                <td class="package"><a href="#">{{ $education->status }}</a></td>
                                                <td>
                                                    <div class="option-box">
                                                        <ul class="option-list">
                                                            <li><button data-text="Edit education"><span
                                                                        class="la la-pencil"></span></button></li>
                                                            <li><button data-text="Delete education"><span
                                                                        class="la la-trash"></span></button></li>
                                                        </ul>
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


            </div>
        </div>
    </section>
    <!-- End Dashboard -->
@endsection

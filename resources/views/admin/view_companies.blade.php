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
       <h3>Manage Jobs</h3>
       <div class="text">Ready to jump back in?</div>
     </div>
     @if (session()->has('success'))
                             <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                                 <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                     aria-label="close">&times;</a>
                                 <strong> {{ session('success') }} </strong>
                             </div>
                         @endif
                         @if (session()->has('error'))
                             <div class="alert alert-danger alert-dismissable" style="margin: 15px;">
                                 <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                     aria-label="close">&times;</a>
                                 <strong> {{ session('error') }} </strong>
                             </div>
                    @endif
     <div class="row">
       <div class="col-lg-12">
         <!-- Ls widget -->
         <div class="ls-widget">
           <div class="tabs-box">
             <div class="widget-title">
               <h4>My Job Listings</h4>

               <div class="chosen-outer">
                 <!--Tabs Box-->
                 <select class="chosen-select">
                   <option>Last 6 Months</option>
                   <option>Last 12 Months</option>
                   <option>Last 16 Months</option>
                   <option>Last 24 Months</option>
                   <option>Last 5 year</option>
                 </select>
               </div>
             </div>

             <div class="widget-content">
               <div class="table-outer">
                 <table class="default-table manage-job-table">
                   <thead>
                     <tr>
                       <th>Company Name</th>
                       <th>Employer Name</th>
                       <th>Contact number</th>
                       <th>Status</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                   @foreach($view_companies as $job)
                     <tr>
                       <td>
                         <h6>{{ $job->name_of_the_company }}</h6>
                       </td>
                       <td>{{ $job->firts_name }} {{ $job->last_name }}</td>
                       
                       <td>{{ $job->phone }}</td>
                       <td class="status">{{ $job->status }}</td>
                       <td>
                         <div class="option-box">
                           <ul class="option-list">
                        
                             <li><a  href="{{ url('/admin_company_view',$job->id) }}" type="button" class="theme-btn btn-style-one small" fdprocessedid="m3qoqi">view</a> </li>
                             <li><a  href="{{ url('/approve_employer',$job->id) }}" type="button" class="theme-btn btn-style-one small" fdprocessedid="m3qoqi">Accept</a> </li>
                             <li><a  href="{{ url('/approvejob',$job->id) }}" style="background-color: red;color:white" type="button" class="theme-btn btn-style-one small" fdprocessedid="m3qoqi">Reject</a> </li>

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

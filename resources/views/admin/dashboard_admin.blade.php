 @include('admin.layouts.app')
 @yield('content')
 

 <div class="page-wrapper">
	<div class="page-content">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Revenue</p>
										<h4 class="my-1">55 </h4>
										<p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
									</div>
								</div>
								<div id="chart1"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Customers</p>
										<h4 class="my-1">66</h4>
										<p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i>14% Since last week</p>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
									</div>
								</div>
								<div id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Store Visitors</p>
										<h4 class="my-1">59K</h4>
										<p class="mb-0 font-13"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-binoculars'></i>
									</div>
								</div>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-8 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Transaction History</h5>
										<p class="mb-0 font-13"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="table-responsive mt-4">
									<table class="table align-middle mb-0 table-hover" id="Transaction-History">
										<thead class="table-light">
											<tr>
												<th>Payment Name</th>
												<th>Date & Time</th>
												<th>Amount</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
															<p class="mb-0 font-13">Refrence Id #8547846</p>
														</div>
													</div>
												</td>
												<td>Jan 10, 2021</td>
												<td>+256.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
															<p class="mb-0 font-13">Refrence Id #9653248</p>
														</div>
													</div>
												</td>
												<td>Jan 12, 2021</td>
												<td>+566.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
															<p class="mb-0 font-13">Refrence Id #7689524</p>
														</div>
													</div>
												</td>
												<td>Jan 14, 2021</td>
												<td>+636.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Declined</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from John Roman</h6>
															<p class="mb-0 font-13">Refrence Id #8335884</p>
														</div>
													</div>
												</td>
												<td>Jan 15, 2021</td>
												<td>+246.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from David Buckley</h6>
															<p class="mb-0 font-13">Refrence Id #7865986</p>
														</div>
													</div>
												</td>
												<td>Jan 16, 2021</td>
												<td>+876.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
															<p class="mb-0 font-13">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-9.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from James Caviness</h6>
															<p class="mb-0 font-13">Refrence Id #3775420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-10.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
															<p class="mb-0 font-13">Refrence Id #3768920</p>
														</div>
													</div>
												</td>
												<td>Jan 19, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-11.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
															<p class="mb-0 font-13">Refrence Id #9673520</p>
														</div>
													</div>
												</td>
												<td>Jan 20, 2021</td>
												<td>+86.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Declined</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-12.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
															<p class="mb-0 font-13">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-13.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from David Buckley</h6>
															<p class="mb-0 font-13">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 22, 2021</td>
												<td>+854.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-14.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
															<p class="mb-0 font-13">Refrence Id #4278620</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1">Bounce Rate</p>
										<h4 class="mb-0">48.32%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-white">+12.34 Increase</p>
										<p class="mb-0 font-13">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart12"></div>
						</div>
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1">Pageviews</p>
										<h4 class="mb-0">52.64%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-white">+21.34 Increase</p>
										<p class="mb-0 font-13">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart13"></div>
						</div>
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1">New Sessions</p>
										<h4 class="mb-0">68.23%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-white">+18.42 Increase</p>
										<p class="mb-0 font-13">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart14"></div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row row-cols-1 row-cols-lg-3">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Top Categories</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="mt-5" id="chart15"></div>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Kids <span class="badge bg-light-white-2 rounded-pill">25</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Women <span class="badge bg-light-white-3 rounded-pill">10</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Men <span class="badge bg-white rounded-pill text-dark">65</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Furniture <span class="badge bg-light-white-4 text-white rounded-pill">14</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<p class="font-weight-bold mb-1">Visitors</p>
								<div class="d-flex align-items-center">
									<div>
										<h4 class="mb-0">43,540</h4>
									</div>
									<div class="">
										<p class="mb-0 align-self-center font-weight-bold ms-2">4.4 <i class='bx bxs-up-arrow-alt mr-2'></i>
										</p>
									</div>
								</div>
								<div id="chart21"></div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Sales Overiew</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="mt-5" id="chart20"></div>
							</div>
							<div class="card-footer bg-transparent border-top-0">
								<div class="d-flex align-items-center justify-content-between text-center">
									<div>
										<h6 class="mb-1 font-weight-bold">$289.42</h6>
										<p class="mb-0">Last Week</p>
									</div>
									<div class="mb-1">
										<h6 class="mb-1 font-weight-bold">$856.14</h6>
										<p class="mb-0">Last Month</p>
									</div>
									<div>
										<h6 class="mb-1 font-weight-bold">$987,25</h6>
										<p class="mb-0">Last Year</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Orders Summary</h5>
							</div>
							<div class="dropdown ms-auto">
								<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="javascript:;">Action</a>
									</li>
									<li><a class="dropdown-item" href="javascript:;">Another action</a>
									</li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="javascript:;">Something else here</a>
									</li>
								</ul>
							</div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Order id</th>
										<th>Product</th>
										<th>Customer</th>
										<th>Date</th>
										<th>Price</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#897656</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/chair.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Light Blue Chair</h6>
												</div>
											</div>
										</td>
										<td>Brooklyn Zeo</td>
										<td>12 Jul 2020</td>
										<td>$64.00</td>
										<td>
											<div class="d-flex align-items-center text-white">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#987549</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/shoes.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Green Sport Shoes</h6>
												</div>
											</div>
										</td>
										<td>Martin Hughes</td>
										<td>14 Jul 2020</td>
										<td>$45.00</td>
										<td>
											<div class="d-flex align-items-center text-white">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Dispatched</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#685749</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/headphones.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Red Headphone 07</h6>
												</div>
											</div>
										</td>
										<td>Shoan Stephen</td>
										<td>15 Jul 2020</td>
										<td>$67.00</td>
										<td>
											<div class="d-flex align-items-center text-white">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Completed</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#887459</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/idea.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Mini Laptop Device</h6>
												</div>
											</div>
										</td>
										<td>Alister Campel</td>
										<td>18 Jul 2020</td>
										<td>$87.00</td>
										<td>
											<div class="d-flex align-items-center text-white">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Completed</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#335428</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/user-interface.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Purple Mobile Phone</h6>
												</div>
											</div>
										</td>
										<td>Keate Medona</td>
										<td>20 Jul 2020</td>
										<td>$75.00</td>
										<td>
											<div class="d-flex align-items-center text-white">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#224578</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/watch.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Smart Hand Watch</h6>
												</div>
											</div>
										</td>
										<td>Winslet Maya</td>
										<td>22 Jul 2020</td>
										<td>$80.00</td>
										<td>
											<div class="d-flex align-items-center text-white">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Dispatched</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#447896</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/tshirt.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">T-Shirt Blue</h6>
												</div>
											</div>
										</td>
										<td>Emy Jackson</td>
										<td>28 Jul 2020</td>
										<td>$96.00</td>
										<td>
											<div class="d-flex align-items-center text-white">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>
</div>



 @include('admin.layouts.footer')

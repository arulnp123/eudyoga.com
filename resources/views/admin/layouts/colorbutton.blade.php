	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ URL::to('/') }}/assets1/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{ URL::to('/') }}/assets1/assets/js/jquery.min.js"></script>
	<script src="{{ URL::to('/') }}/assets1/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ URL::to('/') }}/assets1/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ URL::to('/') }}/assets1/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{ URL::to('/') }}/assets1/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="{{ URL::to('/') }}/assets1/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{ URL::to('/') }}/assets1/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="{{ URL::to('/') }}/assets1/assets/js/index.js"></script>
	<!--app JS-->
	<script src="{{ URL::to('/') }}/assets1/assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
</body>

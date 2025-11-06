<!--begin::Header-->
<div id="kt_app_header" class="app-header">
	<!--begin::Header container-->
	<div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
		<!--begin::Logo/Title-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
			<a href="{{ route('dashboard') }}" class="text-decoration-none">
				<h4 class="mb-0 fw-bold text-gray-800">Dinas Pendapatan Daerah Tabalong</h4>
			</a>
		</div>
		<!--end::Logo/Title-->
		<!--begin::Header wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
			<!--begin::Menu-->
			<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
				<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
					<!--begin:Menu item-->
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
							<span class="menu-title">Home</span>
						</a>
					</div>
					<!--end:Menu item-->
				</div>
			</div>
			<!--end::Menu-->
			<!--begin::Realtime Clock-->
			<div class="d-flex align-items-center me-3">
				<div class="text-gray-700 fw-semibold fs-6" id="realtime-clock">
					<span id="current-time"></span>
				</div>
			</div>
			<!--end::Realtime Clock-->
			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/header/_navbar')
		</div>
		<!--end::Header wrapper-->
	</div>
	<!--end::Header container-->
</div>
<!--end::Header-->

<script>
// Realtime clock
function updateClock() {
	const now = new Date();
	const options = {
		weekday: 'long',
		year: 'numeric',
		month: 'long',
		day: 'numeric',
		hour: '2-digit',
		minute: '2-digit',
		second: '2-digit',
		hour12: false
	};
	const timeString = now.toLocaleString('id-ID', options);
	document.getElementById('current-time').textContent = timeString;
}

// Update clock immediately and then every second
if (document.getElementById('current-time')) {
	updateClock();
	setInterval(updateClock, 1000);
}
</script>

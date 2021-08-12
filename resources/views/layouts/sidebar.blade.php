@section('sidebar')

<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <!-- <img src="img/logo.png" class="d-inline-flex" alt="ICMS" aria-roledescription="logo">
            <span class="page-logo-text mr-1">ICMS</span> -->
            <!-- <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span> -->
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">

        <!-- Menus -->
        <ul id="js-nav-menu" class="nav-menu">

        
            <li>
                <a href="#" title="User" data-filter-tags="Admin">
                    <i class="fal fa-chart-line"></i>
                    <span class="nav-link-text" data-i18n="nav.application_intel">Admin</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ URL::to('/home') }}" title="Home" data-filter-tags="home">
                            <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/product') }}" title="Request Received" data-filter-tags="request received form">
                            <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Request Received</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/report') }}" title="Report" data-filter-tags="report">
                            <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Report</span>
                        </a>
                    </li>
                  
                    
                </ul>
                
            </li>
           
        </ul>

        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->

</aside>

@stop
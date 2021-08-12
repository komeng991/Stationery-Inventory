@extends('layouts.plane')

@section('body')
<body class="mod-bg-1 mod-nav-link ">
  <script>
          /**
           *	This script should be placed right after the body tag for fast execution
           *	Note: the script is written in pure javascript and does not depend on thirdparty library
           **/
          'use strict';

          var classHolder = document.getElementsByTagName("BODY")[0],
              /**
               * Load from localstorage
               **/
              themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
              {},
              themeURL = themeSettings.themeURL || '',
              themeOptions = themeSettings.themeOptions || '';
          /**
           * Load theme options
           **/
          if (themeSettings.themeOptions)
          {
              classHolder.className = themeSettings.themeOptions;
              console.log("%c✔ Theme settings loaded", "color: #148f32");
          }
          else
          {
              console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
          }
          if (themeSettings.themeURL && !document.getElementById('mytheme'))
          {
              var cssfile = document.createElement('link');
              cssfile.id = 'mytheme';
              cssfile.rel = 'stylesheet';
              cssfile.href = themeURL;
              document.getElementsByTagName('head')[0].appendChild(cssfile);

          }
          else if (themeSettings.themeURL && document.getElementById('mytheme'))
          {
              document.getElementById('mytheme').href = themeSettings.themeURL;
          }
          /**
           * Save to localstorage
           **/
          var saveSettings = function()
          {
              themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
              {
                  return /^(nav|header|footer|mod|display)-/i.test(item);
              }).join(' ');
              if (document.getElementById('mytheme'))
              {
                  themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
              };
              localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
          }
          /**
           * Reset settings
           **/
          var resetSettings = function()
          {
              localStorage.setItem("themeSettings", "");
          }

      </script>

<div class="page-wrapper">
  <div class="page-inner">

    @yield('sidebar')
    <div class="page-content-wrapper">
      @yield('header')
      @yield('section')
      <!-- this overlay is activated only when mobile menu is triggered -->
      <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
      <!-- BEGIN Page Footer -->
      <footer class="page-footer" role="contentinfo">
          <div class="d-flex align-items-center flex-1 text-muted">
              <span class="hidden-md-down fw-700">2020 © SmartAdmin by&nbsp;<a href='https://www.gotbootstrap.com' class='text-primary fw-500' title='gotbootstrap.com' target='_blank'>gotbootstrap.com</a></span>
          </div>
          <div>
              <ul class="list-table m-0">
                  <li><a href="intel_introduction.html" class="text-secondary fw-700">About</a></li>
                  <li class="pl-3"><a href="info_app_licensing.html" class="text-secondary fw-700">License</a></li>
                  <li class="pl-3"><a href="info_app_docs.html" class="text-secondary fw-700">Documentation</a></li>
                  <li class="pl-3 fs-xl"><a href="https://wrapbootstrap.com/user/MyOrange" class="text-secondary" target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
              </ul>
          </div>
      </footer>
      <!-- END Page Footer -->
      <!-- BEGIN Color profile -->
      <!-- this area is hidden and will not be seen on screens or screen readers -->
      <!-- we use this only for CSS color refernce for JS stuff -->
      <p id="js-color-profile" class="d-none">
          <span class="color-primary-50"></span>
          <span class="color-primary-100"></span>
          <span class="color-primary-200"></span>
          <span class="color-primary-300"></span>
          <span class="color-primary-400"></span>
          <span class="color-primary-500"></span>
          <span class="color-primary-600"></span>
          <span class="color-primary-700"></span>
          <span class="color-primary-800"></span>
          <span class="color-primary-900"></span>
          <span class="color-info-50"></span>
          <span class="color-info-100"></span>
          <span class="color-info-200"></span>
          <span class="color-info-300"></span>
          <span class="color-info-400"></span>
          <span class="color-info-500"></span>
          <span class="color-info-600"></span>
          <span class="color-info-700"></span>
          <span class="color-info-800"></span>
          <span class="color-info-900"></span>
          <span class="color-danger-50"></span>
          <span class="color-danger-100"></span>
          <span class="color-danger-200"></span>
          <span class="color-danger-300"></span>
          <span class="color-danger-400"></span>
          <span class="color-danger-500"></span>
          <span class="color-danger-600"></span>
          <span class="color-danger-700"></span>
          <span class="color-danger-800"></span>
          <span class="color-danger-900"></span>
          <span class="color-warning-50"></span>
          <span class="color-warning-100"></span>
          <span class="color-warning-200"></span>
          <span class="color-warning-300"></span>
          <span class="color-warning-400"></span>
          <span class="color-warning-500"></span>
          <span class="color-warning-600"></span>
          <span class="color-warning-700"></span>
          <span class="color-warning-800"></span>
          <span class="color-warning-900"></span>
          <span class="color-success-50"></span>
          <span class="color-success-100"></span>
          <span class="color-success-200"></span>
          <span class="color-success-300"></span>
          <span class="color-success-400"></span>
          <span class="color-success-500"></span>
          <span class="color-success-600"></span>
          <span class="color-success-700"></span>
          <span class="color-success-800"></span>
          <span class="color-success-900"></span>
          <span class="color-fusion-50"></span>
          <span class="color-fusion-100"></span>
          <span class="color-fusion-200"></span>
          <span class="color-fusion-300"></span>
          <span class="color-fusion-400"></span>
          <span class="color-fusion-500"></span>
          <span class="color-fusion-600"></span>
          <span class="color-fusion-700"></span>
          <span class="color-fusion-800"></span>
          <span class="color-fusion-900"></span>
      </p>
      <!-- END Color profile -->
    <div>
  </div>
</div>


@stop

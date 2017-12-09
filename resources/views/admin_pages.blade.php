@include("admin_header")

<div class="container-fluid" id="admin-page">
@include("admin_menu")
 <div class="col-sm-10">

 <h3 style="font-weight: 300;color: #777;">Postęp integracji</h3>
<div class="progress">

@if((Auth::user()->shop('xml_sklepu') == '') || (Auth::user()->shop('opis_sklepu') == '') || (Auth::user()->shop('logo_sklepu') == '') || (Auth::user()->shop('link_sklepu') == '') || (Auth::user()->shop('nazwa_sklepu') == ''))
  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
    <span>0%</span>
    @else 
    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:33%">
    <span>33%</span>
@endif
  </div>
  </div>

<div class="panel panel-default">

        @yield('content') 
         </div>
    </div>
        </div>
    </div>
@include("admin_footer")
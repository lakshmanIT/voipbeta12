<!-- HEader -->        
@include('admin.layout._header')    

<!-- Page content -->
<div class="page-content">
<div class="col-md-12" style="padding: 0px">
<div style="width: 20%;float: left;">
@include('admin.layout._sidebar') 
</div>
<!-- BEGIN Content -->
<div style="width: 80%;float: left;">
<div id="main-content" style="padding:25px">
    @yield('main_content')
</div>
</div>
    <!-- END Main Content -->
</div>
<!-- Footer -->        
<!-- @include('admin.layout._footer') -->  
</div>  
                
              
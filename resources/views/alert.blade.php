@if (session('msg_success'))
    <div class="alert alert-success alert-dismissible fade in submitted" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <center><strong>{{session('msg_success')}}</strong></center>
    </div>
@endif
@if (session('msg_danger'))
    <div class="alert alert-danger alert-dismissible fade in submitted" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <center><strong>{{session('msg_danger')}}</strong></center>
    </div>
@endif
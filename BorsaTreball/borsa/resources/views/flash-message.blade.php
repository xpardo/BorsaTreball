
<!-- 
<header>
   
        <div class="alert alert-{{$type}} alert-dismissible fade show" role="alert">
            {{ $message }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
    
</header> -->





@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> $message </strong>
</div>
@endif

<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="pannel-heading">
                    profile
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        @if($empresa->profile->image)
                            <img src="{{asset('assets/image/profile')}}/{{$empresa->profile->image}}" width="100%" />
                        @else
                            <img src="{{asset('assets/image/profile/default.jpg')}}" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-8">
                        <p><b> Nom </b> {{ $empresa->name }}</p>
                        <p><b> cognom </b> {{ $empresa->cognom }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

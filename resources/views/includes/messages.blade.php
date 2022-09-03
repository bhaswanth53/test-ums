@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        {{session('error')}}
    </div>
@endif
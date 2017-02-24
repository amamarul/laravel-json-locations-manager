@extends(config('amamarul-location.layout'))

@section(config('amamarul-location.content_section'))
        @include('langs::includes.tools')
        <h2 class="text-center">{{__('Languages installed')}}</h2>

        @foreach ($langs as $lang)
            <div class="col-sm-4 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__('Lang')}} <b>{{ucfirst($lang)}}</b></div>
                    <div class="panel-body">
                        <a href="{{route('amamarul.translations.lang',$lang)}}" class="btn btn-success btn-block">{{ __('Edit') }} {{ucfirst($lang)}}</a> <br><br>
                        <a href="{{route('amamarul.translations.lang.generateJson',$lang)}}" class="btn btn-primary btn-block">{{__('Generate Json File')}}</a>
                    </div>
                </div>
            </div>
        @endforeach

@endsection

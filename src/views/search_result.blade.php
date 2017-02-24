@extends(config('amamarul-location.layout'))
@section(config('amamarul-location.content_section'))
        @include('langs::includes.tools')
        <h2 class="text-center">{{__('Search Result for')}} '{{$search_value }}'</h2>
        @if (count($result) > 0)
            <div class="col-xs-12">
                @foreach ($result as $element)
                    <div class="row">
                        <div class="col-xs-6">
                            {{$element->en}} <br>
                        </div>
                        <div class="col-xs-6 text-center">
                            <a href="{{route('amamarul.translations.lang.string',$element->code)}}" class="btn btn-xs btn-warning">Show</a>
                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
            @else
                <div class="col-xs-12">
                    <h3>No results for {{ $search_value }}</h3>
                </div>
        @endif
@endsection

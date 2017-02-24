@extends(config('amamarul-location.layout'))
@section(config('amamarul-location.content_section'))
        @include('langs::includes.tools')
        <h2 class="text-center">String {{$string->en}} ({{$string->code}})</h2>

        @foreach (collect($string)->except(['code','created_at','updated_at'])->toArray() as $key => $element)
            {{$key}} <br>
            <a href="#" class="testEdit" data-type="textarea" data-column="code" data-url="{{url('translations/lang/update/'.$string->code)}}" data-pk="{{$string->code}}" data-title="change" data-name="{{$key}}">{{$element}}</a> <br>
            <br>

        @endforeach

@endsection
@section(config('amamarul-location.scripts_section'))
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script>
$.fn.editable.defaults.mode = 'inline';
$(document).ready(function() {
    $('.testEdit').editable({
        rows: 3,
        params: function(params) {
            // add additional params from data-attributes of trigger element
            params.name = $(this).editable().data('name');
            return params;
        },
        error: function(response, newValue) {
            if(response.status === 500) {
                return 'Server error. Check entered data.';
            } else {
                return response.responseText;
                // return "Error.";
            }
        }
    });
});
</script>
@endsection

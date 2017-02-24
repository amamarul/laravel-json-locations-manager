@extends(config('amamarul-location.layout'))
@section(config('amamarul-location.content_section'))
        @include('langs::includes.tools')
        <div class="col-md-12">

            <h2 class=" text-center">Language {{ucfirst($lang)}}</h2>
            <div class="col-xs-6 text-center">
                <div class="alert alert-info" role="alert">Langs: 'En', '{{ucfirst($lang)}}'</div>
            </div>
            <div class="col-xs-6">
                <a href="{{route('amamarul.translations.lang.generateJson',$lang)}}" class="btn btn-success btn-block pull-right">Generate Json File</a>
            </div>
            <table class="table table-striped">
            @foreach($list as $key => $value)
                <tr>
                    <td><td width="10px"><input type="checkbox" name="ids_to_edit[]" value="{{$value->id}}" /></td></td>
                    @foreach ($value->toArray() as $key => $element)
                        @if ($key !== 'code')
                            <td><a href="#" class="testEdit" data-type="textarea" data-column="code" data-url="{{url('translations/lang/update/'.$value->code)}}" data-pk="{{$value->code}}" data-title="change" data-name="{{$key}}">{{$element}}</a></td>
                        @endif
                    @endforeach
                    <td><a href="{{route('amamarul.translations.lang.string',$value->code)}}" class="btn btn-xs btn-warning">Show</a></td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
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

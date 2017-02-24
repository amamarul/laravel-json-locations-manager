<div class="row">
    <a href="{{route('amamarul.translations.lang.publishAll')}}" class="btn btn-default pull-left">{{__('Publish All Json Files')}}</a>
    <a href="{{route('amamarul.translations.home')}}" class="btn btn-default pull-right">{{__('All Locations')}}</a>
    <hr>
    <div class="col-xs-6 pull-right">
        <form action="{{route('amamarul.translations.lang.newLang')}}" class="form-horizontal" method="GET" onSubmit="if(!confirm('{{__('Are you sure you want to create a new string?')}}')){return false;}">
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="newLang" id="new-lang" placeholder="{{__('lang code Ex. es')}}">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="submit" class='btn btn-primary btn-block' value="New Language">
                </div>
            </div>
        </form>
    </div>
    <div class="col-xs-6 pull-left">
        <form action="{{route('amamarul.translations.lang.newString')}}" class="form-horizontal" method="GET" onSubmit="if(!confirm('{{__('Are you sure you want to create a new language?')}}')){return false;}">
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="newString" id="new-string" placeholder=" {{__("Ex. Hello")}}">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="submit" class='btn btn-primary btn-block' value="{{__('New String')}}">
                </div>
            </div>
        </form>
    </div>
    <div class="col-xs-12 pull-left">
        <form action="{{route('amamarul.translations.lang.search')}}" class="form-horizontal" method="GET">
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="new-search" placeholder="{{__('Search')}}">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <input type="submit" class='btn btn-success btn-block' value="{{__('Search')}}">
                </div>
            </div>
        </form>
    </div>
</div>

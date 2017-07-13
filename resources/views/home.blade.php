@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <!--Currency Converter widget by FreeCurrencyRates.com -->

                <div id='gcw_mainF8L5Uf9B7' class='gcw_mainF8L5Uf9B7'></div>
                <a id='gcw_siteF8L5Uf9B7' href='https://freecurrencyrates.com/en/'>FreeCurrencyRates.com</a>
                <script>function reloadF8L5Uf9B7(){ var sc = document.getElementById('scF8L5Uf9B7');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scF8L5Uf9B7';sc.src = 'https://freecurrencyrates.com/en/widget-horizontal?iso=USDEURGBPJPYCNYNGN&df=2&p=F8L5Uf9B7&v=fits&source=fcr&width=900&width_title=225&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=-60';var div = document.getElementById('gcw_mainF8L5Uf9B7');div.parentNode.insertBefore(sc, div);} reloadF8L5Uf9B7(); </script>
                <!-- put custom styles here: .gcw_mainF8L5Uf9B7{}, .gcw_headerF8L5Uf9B7{}, .gcw_ratesF8L5Uf9B7{}, .gcw_sourceF8L5Uf9B7{} -->
                <!--End of Currency Converter widget by FreeCurrencyRates.com -->
                <div class="panel-body">
                    <form action="{{route('cov')}}" method="post" role="form">

                    	<div class="form-group">
                    		<label for="">
                                Amount
                            </label>
                    		<input type="text" class="form-control" name="amount" id="" placeholder="amount in dollars">
                            <input name="_token" value="{{Session::token()}}" type="hidden"/>
                    	</div>
@if(isset($val))
                        <h3>NGN{{$val}}</h3>
@endif


                    	<button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

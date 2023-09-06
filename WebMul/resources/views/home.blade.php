@extends('template')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-xs-12">
                <div class="card" style="position: fixed;width: 500px;height: auto;margin: 10% auto;left: 0;right: 0;">
                    <img class="card-img-top" src="data:image/png;base64,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">
                    <div class="card-body" style="color:#333;">
                        <h1 class="cover-heading" style="font-family: 'Edu SA Beginner', cursive;">Muhammad Rizqi Mahendra.</h1>
                        <!-- <p class="lead" style="font-family: 'Lato', sans-serif;">Website ini merupakan webiste yang diuat untuk menampilkan hasil Analisis Sentimen data twitter mengenai kasus COVID-19 varian Omicron.</p> -->
                    </div> 
                </div>
        </div>
    </div>
</div>

@endsection
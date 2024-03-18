@extends('layout.mainLayout')
@section('mainSection')


<div class="container">
<section class="text-center justify-content-center ">{!!$data->content ?? 'none'!!}</section>
</div>

 @endsection
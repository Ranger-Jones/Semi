@extends('layouts.intro')

@section('content')
<div class="container">
    <div class="d-block align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 mt-2">
                <a href="/login" class="">
                    <img src="{{ asset('svg/LoginBtn.svg') }}" class="w-75" alt="geth nicht">
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <a href="/vbg">
                    <img src="{{ asset('svg/vbgBtn.svg') }}" class="w-75" alt="geth nicht">
                </a>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    var colorOrig=$(".show-button").css('background-color');
    $(".show-button").hover(
    function() {
        //mouse over
        $(this).css('background', '#ff')
    }, function() {
        //mouse out
        $(this).css('background', colorOrig)
    });
});​
</script>
@endsection

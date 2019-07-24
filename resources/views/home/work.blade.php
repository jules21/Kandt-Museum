@extends('layouts.main');
@section('title', 'Visit Schedule')
@section('page', 'Visit Schedule')

@section('content')
{{-- style --}}<style>
.demo-bg{
    background: #dd;
    margin-top: 60px;
    }
    .business-hours {
    background: #222; 
    padding: 40px 14px;
    margin-top: -15px;
    position: relative;
    }
    .business-hours:before{
    content: '';
    width: 23px;
    height: 23px;
    background: #111;
    position: absolute;
    top: 5px;
    left: -12px;
    transform: rotate(-45deg);
    z-index: -1;
    }
    .business-hours .title {
    font-size: 20px;
    color: #BBB;
    text-transform: uppercase;
    padding-left: 5px;
    border-left: 4px solid #ffac0c; 
    }
    .business-hours li {
    color: #888;
    line-height: 30px;
    border-bottom: 1px solid #333; 
    }
    .business-hours li:last-child {
    border-bottom: none; 
    }
    .business-hours .opening-hours li.today {
    color: #ffac0c; 
    }
</style>{{-- content --}}
<div class="container demo-bg">
    <div class="row">
    <div class="col-sm-4 md-offset-2">
    <div class="business-hours">
    <h2 class="title">Opening Hours</h2>
    <ul class="list-unstyled opening-hours">
    {{-- <li>Sunday <span class="pull-right">Closed</span></li>
    <li>Monday <span class="pull-right">9:00-22:00</span></li>
    <li>Tuesday <span class="pull-right">9:00-22:00</span></li>
    <li>Wednesday <span class="pull-right">9:00-22:00</span></li>
    <li>Thursday <span class="pull-right">9:00-22:00</span></li>
    <li>Friday <span class="pull-right">9:00-23:30</span></li>
    <li>Saturday <span class="pull-right">14:00-23:30</span></li> --}}
        @foreach ($works as $work)
        <li>{{$work->days_of_week}} <span class="pull-right">{{$work->start_time}}-{{$work->end_time}}</span></li>
        @endforeach

    </ul>
    </div>
    </div>
    </div>
    </div>
<script>
// highlight current day on opeining hours
$(document).ready(function() {
$('.opening-hours li').eq(new Date().getDay()).addClass('today');
});</script>
    @endsection
@extends('layouts.dashboard-nav-user')

@section('content')

<div class="dash-section">
    <!-- Where the title goes -->
    <div class="dash-division dash-div1">
        <div class="dash-head-sec">
            <p><span>Dashboard</span> <span><i class="fa-solid fa-arrow-right"></i></span> All</p>
        </div>
        <div class="dash-head-sec">
            <div class="dash-head-sec-items">
                <span class="calendar">
                    <i class="fa-solid fa-calendar"></i>
                </span>
                <input type="week" name="" id="" value="2024-W48">
            </div>
            <div class="dash-head-sec-items">
                    <span><i class="fa-solid fa-filter"></i></span>
                    <button type="button">Filter</button>
            </div>
        </div>
    </div>
    <!-- List of all the earnings -->
    <div class="dash-division dash-div2"></div>
    <!-- Other content -->
    <div class="dash-division dash-div3"></div>
</div>

@endsection
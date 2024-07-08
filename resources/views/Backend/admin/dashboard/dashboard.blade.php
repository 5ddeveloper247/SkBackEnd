@extends('Backend.includes.common-template')

@push('styles')
{{--
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}"> --}}
@endpush

<style>
    .dashboard-main-cards .col a {
        width: 100%
    }
</style>

@section('content')
<section id="dash">
    <div class="contain-fluid">
        <ul class="crumbs">
            <li>Dashboard</li>
        </ul>
        <div class="tile_row flex_row dashboard-main-cards">
            <div class="col">
                <a href="{{ route('admin.property.listing') }}">
                    <div class="tile_blk">
                        <div class="icon"><img src="{{asset('images/icon-list.svg')}}" alt=""></div>
                        <div class="txt">
                            <h4>Property Listing</h4>
                            <p>Add a property</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.media.view') }}">
                    <div class="tile_blk">

                        <div class="icon"><img src="{{asset('images/icon-plus.svg')}}" alt=""></div>
                        <div class="txt">
                            <h4>Media</h4>
                            <p>Add a Media</p>
                        </div>

                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.testimonials.view') }}">
                    <div class="tile_blk">

                        <div class="icon"><img src="{{asset('images/icon-reply.svg')}}" alt=""></div>
                        <div class="txt">
                            <h4>Testimonials</h4>
                            <p>Add a testimonial</p>
                        </div>

                    </div>
                </a>
            </div>
        </div>
        <div class="space"></div>
        <div class="block_row flex_row">
            <div class="col">

                <div class="inner">
                    <strong>{{ $adminUsers }}</strong>
                    <p>Admin Users</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>{{ $propertyListings }}</strong>
                    <p>Property Listings</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>{{ $inactivePropertyListings }}</strong>
                    <p>Inactive Property Listings</p>
                </div>
            </div>

            <div class="col">
                <div class="inner">
                    <strong>{{ $activePropertyListings }}</strong>
                    <p>Active Property Listings</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>{{ $pendingContacts }}</strong>
                    <p>Pending Contact queries</p>
                </div>
            </div>
        </div>
        <div class="space"></div>



        <div id="inquiry_chart" style="width: 100%;height:400px;"></div>
        <div id="property_chart" style="width: 100%;height:400px;"></div>







    </div>
</section>
@endsection



@push('scripts')
<script>
    loadCharts();

    function loadCharts() {
        let url = '/admin/chart/dashboard/ajax';
        let type = 'GET';
        SendAjaxRequestToServer(type, url, '', '', loadChartResponse, '', '');
    }

    function loadChartResponse(response) {
        // Extract dates and counts from response
        let inquiriesDates = response.inquiriesDates;
        let inquiriesCounts = response.inquiriesCounts;
        let propertiesDates = response.propertiesDates;
        let propertiesRentCounts = response.propertiesRentCounts;
        let propertiesSaleCounts = response.propertiesSaleCounts;

        // Create a set of all unique dates from both inquiries and properties
        let allDatesSet = new Set([...inquiriesDates, ...propertiesDates]);
        let allDates = Array.from(allDatesSet).sort((a, b) => new Date(a) - new Date(b));
        console.log("allDates",allDates);
        console.log("allDatesSet",allDatesSet);

        let inquiriesData = [];
        let propertiesRentData = [];
        let propertiesSaleData = [];

        // Populate the data arrays with counts corresponding to each date
        allDates.forEach(date => {
            let inquiryIndex = inquiriesDates.indexOf(date);
            let propertyIndex = propertiesDates.indexOf(date);
            
            inquiriesData.push(inquiryIndex !== -1 ? inquiriesCounts[inquiryIndex] : 0);
            propertiesRentData.push(propertyIndex !== -1 ? propertiesRentCounts[propertyIndex] : 0);
            propertiesSaleData.push(propertyIndex !== -1 ? propertiesSaleCounts[propertyIndex] : 0);
        });
         console.log("inquiryData",inquiriesData)
        // Format dates for x-axis labels
        let x_value_days = allDates.map(date => {
            return new Date(date).toLocaleDateString('en-GB', {
                day: 'numeric', 
                month: 'short'
            });
        });

        // Initialize the echarts instance based on the prepared DOM
        var inquiryChart = echarts.init(document.getElementById('inquiry_chart'));
        var propertyChart = echarts.init(document.getElementById('property_chart'));

        // Specify the configuration items and data for the inquiry chart
        var inquiryOption = {
            title: {
                text: 'Total Inquiries (Last 15 days)'
            },
            tooltip: {},
            legend: {
                data: ['Inquiries']
            },
            xAxis: {
                data: x_value_days
            },
            yAxis: {},
            series: [
                {
                    name: 'Inquiries',
                    type: 'bar',
                    data: inquiriesData,
                    itemStyle: {
                        color: '#04D7E8'
                    }
                }
            ]
        };

        // Specify the configuration items and data for the property chart
        var propertyOption = {
            title: {
                text: 'Total Properties (Last 15 days)'
            },
            tooltip: {},
            legend: {
                data: ['Rent', 'Sale']
            },
            xAxis: {
                data: x_value_days
            },
            yAxis: {},
            series: [
                {
                    name: 'Rent',
                    type: 'bar',
                    data: propertiesRentData,
                    itemStyle: {
                        color: '#04D7E8'
                    }
                },
                {
                    name: 'Sale',
                    type: 'bar',
                    data: propertiesSaleData,
                    itemStyle: {
                        color: '#E84D04'
                    }
                }
            ]
        };

        // Display the charts using the configuration items and data just specified.
        inquiryChart.setOption(inquiryOption);
        propertyChart.setOption(propertyOption);
    }
</script>


{{-- <script src="{{ asset('js/custom-home.js') }}"></script> --}}
@endpush
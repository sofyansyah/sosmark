@extends('layouts.master')


@section('content')
<div class="panel-body">
    <h4>Analytic View</h4>
    <div class="col-md-6">
       <div id="follower"></div>
   </div>
   <div class="col-md-6">
       <div id="following"></div>
   </div>
   <div class="col-md-6" >
       <div id="unfollow"></div>
   </div>
   <div class="col-md-6">
       <div id="like"></div>
   </div>
</div>


@section('javascript')
<script src="{{asset('js/exporting.js')}}"></script>
<script src="{{asset('js/highcharts.js')}}"></script>

<script>
    Highcharts.chart('follower', {

        title: {
            text: 'Follower 2017'
        },

    // subtitle: {
    //     text: 'Source: thesolarfoundation.com'
    // },

    yAxis: {
        title: {
            text: 'Number of User'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        name: 'follower',
        data: [1000, 2500, 2000, 500, 1000, 1200, 1300, 1400, 3400, 3400, 3600,3700, 3800]
    }]

});
</script>

<script>
    Highcharts.chart('following', {

        title: {
            text: 'Following 2017'
        },

    // subtitle: {
    //     text: 'Source: thesolarfoundation.com'
    // },

    yAxis: {
        title: {
            text: 'Number of User'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        name: 'following',
        data: [1000, 3500, 3000, 1500, 2000, 1200, 3300, 3400, 3400, 3600,3700, 3800]
    }]

});
</script>



<script>
    Highcharts.chart('unfollow', {

        title: {
            text: 'Unfollow 2017'
        },

    // subtitle: {
    //     text: 'Source: thesolarfoundation.com'
    // },

    yAxis: {
        title: {
            text: 'Number of User'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

   xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        name: 'unfollow',
        data: [3000, 2500, 3000, 1500, 2000, 2200, 2300, 3400, 3400, 3600,3700]
    }]

});
</script>

<script>
    Highcharts.chart('like', {

        title: {
            text: 'Like 2017'
        },

    // subtitle: {
    //     text: 'Source: thesolarfoundation.com'
    // },

    yAxis: {
        title: {
            text: 'Number of like'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        name: 'like',
        data: [2000, 2500, 3000, 1500, 2000, 1200, 3300, 3400, 3500, 3500, 3400, 3600]
    }]

});
</script>

@endsection
@endsection


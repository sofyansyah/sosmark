@extends('layouts.master')

@section('content')
<table class="highchart" data-graph-container-before="1" data-graph-type="column">
  <thead>
      <tr>
          <th>Month</th>
          <th>Sales</th>
      </tr>
   </thead>
   <tbody>
      <tr>
          <td>January</td>
          <td>8000</td>
      </tr>
      <tr>
          <td>February</td>
          <td>12000</td>
      </tr>
  </tbody>
</table>

@section('js')
<script type="text/javascript">
    
$('table.highchart')
  .bind('highchartTable.beforeRender', function(event, highChartConfig) {
    highChartConfig.colors = ['#104C4C', '#88CCCC', '#228E8E', '#CCFFFF', '#00CCCC', '#3399CC'];
  })
  .highchartTable();
@endsection

@endsection


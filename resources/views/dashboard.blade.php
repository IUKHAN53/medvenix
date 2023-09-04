@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}"/>
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection


@section('content')
  <h4>Dashboard</h4>
  <div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Users</span>
              <div class="d-flex align-items-end mt-2">
                <h3 class="mb-0 me-2">{{$totalUser}}</h3>
                <small class="text-success">(100%)</small>
              </div>
              <small>Total Users</small>
            </div>
            <span class="badge bg-label-primary rounded p-2">
            <i class="ti ti-user ti-sm"></i>
          </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Verified Users</span>
              <div class="d-flex align-items-end mt-2">
                <h3 class="mb-0 me-2">{{$verified}}</h3>
                <small class="text-success">(+95%)</small>
              </div>
              <small>Recent analytics </small>
            </div>
            <span class="badge bg-label-success rounded p-2">
            <i class="ti ti-user-check ti-sm"></i>
          </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Duplicate Users</span>
              <div class="d-flex align-items-end mt-2">
                <h3 class="mb-0 me-2">{{$userDuplicates}}</h3>
                <small class="text-success">(0%)</small>
              </div>
              <small>Recent analytics</small>
            </div>
            <span class="badge bg-label-danger rounded p-2">
            <i class="ti ti-users ti-sm"></i>
          </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Verification Pending</span>
              <div class="d-flex align-items-end mt-2">
                <h3 class="mb-0 me-2">{{$notVerified}}</h3>
                <small class="text-danger">(+6%)</small>
              </div>
              <small>Recent analytics</small>
            </div>
            <span class="badge bg-label-warning rounded p-2">
            <i class="ti ti-user-circle ti-sm"></i>
          </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mb-4">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div>
            <h5 class="card-title mb-0">Last updates</h5>
            <small class="text-muted">Commercial networks</small>
          </div>
        </div>
        <div class="card-body">
          <div id="users_chart"></div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('page-script')
  <script src="{{asset('assets/js/charts-apex.js')}}"></script>
  <script>
    (function () {
      let labelColor, borderColor, legendColor;

      if (isDarkStyle) {
        labelColor = config.colors_dark.textMuted;
        legendColor = config.colors_dark.bodyColor;
        borderColor = config.colors_dark.borderColor;
      } else {
        labelColor = config.colors.textMuted;
        legendColor = config.colors.bodyColor;
        borderColor = config.colors.borderColor;
      }
      // Color constant
      const chartColors = {
        column: {
          series1: '#826af9',
          series2: '#d2b0ff',
          bg: '#f8d3ff'
        },
        donut: {
          series1: '#fee802',
          series2: '#3fd0bd',
          series3: '#826bf8',
          series4: '#2b9bf4'
        },
        area: {
          series1: '#29dac7',
          series2: '#60f2ca',
          series3: '#a5f8cd'
        }
      };

      const users_chart = document.querySelector('#users_chart'),
        users_chart_config = {
          chart: {
            height: 400,
            type: 'area',
            parentHeightOffset: 0,
            toolbar: {
              show: false
            }
          },
          dataLabels: {
            enabled: false
          },
          stroke: {
            show: false,
            curve: 'straight'
          },
          legend: {
            show: true,
            position: 'top',
            horizontalAlign: 'start',
            labels: {
              colors: legendColor,
              useSeriesColors: false
            }
          },
          grid: {
            borderColor: borderColor,
            xaxis: {
              lines: {
                show: true
              }
            }
          },
          colors: [chartColors.area.series3, chartColors.area.series2, chartColors.area.series1],
          series: [
            {
              name: 'Users Registered',
              data: [100, 120, 90, 170, 130, 160, 140, 240, 220, 180, 270, 280, 375]
            },
          ],
          xaxis: {
            categories: [
              'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
            ],
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            },
            labels: {
              style: {
                colors: labelColor,
                fontSize: '13px'
              }
            }
          },
          yaxis: {
            labels: {
              style: {
                colors: labelColor,
                fontSize: '13px'
              }
            }
          },
          fill: {
            opacity: 1,
            type: 'solid'
          },
          tooltip: {
            shared: false
          }
        };
      const user_chart = new ApexCharts(users_chart, users_chart_config);
      user_chart.render();
    })();
  </script>
@endsection

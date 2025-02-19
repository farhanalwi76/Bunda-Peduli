/*
Template Name: Kadso - Responsive Bootstrap 5 Admin Dashboard
Author: Zoyothemes
Version: 1.0.0
Website: https://zoyothemes.com/
File: Apexcharts Treemap Charts
*/

// 
// Basic Treemap Charts
// 
var options = {
    series: [
        {
            data: [
                {
                    x: 'New Delhi',
                    y: 218
                },
                {
                    x: 'Kolkata',
                    y: 149
                },
                {
                    x: 'Mumbai',
                    y: 184
                },
                {
                    x: 'Ahmedabad',
                    y: 55
                },
                {
                    x: 'Bangaluru',
                    y: 84
                },
                {
                    x: 'Pune',
                    y: 31
                },
                {
                    x: 'Chennai',
                    y: 70
                },
                {
                    x: 'Jaipur',
                    y: 30
                },
                {
                    x: 'Surat',
                    y: 44
                },
                {
                    x: 'Hyderabad',
                    y: 68
                },
                {
                    x: 'Lucknow',
                    y: 28
                },
                {
                    x: 'Indore',
                    y: 19
                },
                {
                    x: 'Kanpur',
                    y: 29
                }
            ]
        }
    ],
    legend: {
        show: false
    },
    colors: ["#f2c94c"],
    chart: {
        height: 350,
        type: 'treemap'
    },
    title: {
        text: 'Basic Treemap'
    }
};

var chart = new ApexCharts(document.querySelector("#basic_treemap_chart"), options);
chart.render();


// 
// Multiple Series Charts
// 
var options = {
    series: [
        {
            name: 'Desktops',
            data: [
                {
                    x: 'ABC',
                    y: 10
                },
                {
                    x: 'DEF',
                    y: 60
                },
                {
                    x: 'XYZ',
                    y: 41
                }
            ]
        },
        {
            name: 'Mobile',
            data: [
                {
                    x: 'ABCD',
                    y: 10
                },
                {
                    x: 'DEFG',
                    y: 20
                },
                {
                    x: 'WXYZ',
                    y: 51
                },
                {
                    x: 'PQR',
                    y: 30
                },
                {
                    x: 'MNO',
                    y: 20
                },
                {
                    x: 'CDE',
                    y: 30
                }
            ]
        }
    ],
    legend: {
        show: false
    },
    chart: {
        height: 350,
        type: 'treemap'
    },
    colors: ["#4a98f5", "#23c093", '#836ccb'],
    title: {
        text: 'Multi-dimensional Treemap',
        align: 'center'
    }
};

var chart = new ApexCharts(document.querySelector("#multi_series_chart"), options);
chart.render();


// 
// Color Range Chart
// 
var options = {
    series: [
        {
            data: [
                {
                    x: 'INTC',
                    y: 1.2
                },
                {
                    x: 'GS',
                    y: 0.4
                },
                {
                    x: 'CVX',
                    y: -1.4
                },
                {
                    x: 'GE',
                    y: 2.7
                },
                {
                    x: 'CAT',
                    y: -0.3
                },
                {
                    x: 'RTX',
                    y: 5.1
                },
                {
                    x: 'CSCO',
                    y: -2.3
                },
                {
                    x: 'JNJ',
                    y: 2.1
                },
                {
                    x: 'PG',
                    y: 0.3
                },
                {
                    x: 'TRV',
                    y: 0.12
                },
                {
                    x: 'MMM',
                    y: -2.31
                },
                {
                    x: 'NKE',
                    y: 3.98
                },
                {
                    x: 'IYT',
                    y: 1.67
                }
            ]
        }
    ],
    legend: {
        show: false
    },
    chart: {
        height: 350,
        type: 'treemap'
    },
    title: {
        text: 'Treemap with Color scale'
    },
    dataLabels: {
        enabled: true,
        style: {
            fontSize: '12px',
        },
        formatter: function (text, op) {
            return [text, op.value]
        },
        offsetY: -4
    },
    plotOptions: {
        treemap: {
            enableShades: true,
            shadeIntensity: 0.5,
            reverseNegativeShade: true,
            colorScale: {
                ranges: [
                    {
                        from: -6,
                        to: 0,
                        color: '#d63384'
                    },
                    {
                        from: 0.001,
                        to: 6,
                        color: '#20c997'
                    }
                ]
            }
        }
    }
};

var chart = new ApexCharts(document.querySelector("#color_range_chart"), options);
chart.render();

// 
// Distributed Treemap Charts
// 
var options = {
    series: [
        {
            data: [
                {
                    x: 'New Delhi',
                    y: 218
                },
                {
                    x: 'Kolkata',
                    y: 149
                },
                {
                    x: 'Mumbai',
                    y: 184
                },
                {
                    x: 'Ahmedabad',
                    y: 55
                },
                {
                    x: 'Bangaluru',
                    y: 84
                },
                {
                    x: 'Pune',
                    y: 31
                },
                {
                    x: 'Chennai',
                    y: 70
                },
                {
                    x: 'Jaipur',
                    y: 30
                },
                {
                    x: 'Surat',
                    y: 44
                },
                {
                    x: 'Hyderabad',
                    y: 68
                },
                {
                    x: 'Lucknow',
                    y: 28
                },
                {
                    x: 'Indore',
                    y: 19
                },
                {
                    x: 'Kanpur',
                    y: 29
                }
            ]
        }
    ],
    legend: {
        show: false
    },
    chart: {
        height: 350,
        type: 'treemap'
    },
    title: {
        text: 'Distibuted Treemap (different color for each cell)',
        align: 'center'
    },
    colors: [
        '#4a98f5',
        '#6610f2',
        '#836ccb',
        '#d63384',
        '#fa7d7b',
        '#fd7e14',
        '#f2c94c',
        '#23c093',
        '#20c997',
        '#41c7f1',
        '#343a40',
        '#C0ADDB'
    ],
    plotOptions: {
        treemap: {
            distributed: true,
            enableShades: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#distributed_treemap_chart"), options);
chart.render();
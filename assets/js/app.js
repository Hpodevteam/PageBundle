import '../css/app.scss';


import PieChart from './charts/pie_chart';
import BarChart from './charts/bar_chart';
import LineChart from './charts/line_chart';


global.$ = global.jQuery = $;
global.PieChart = PieChart;
global.BarChart = BarChart;
global.LineChart = LineChart;

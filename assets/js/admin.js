import Sortable from 'sortablejs';
import '../css/app.scss';

import PieChart from "./charts/pie_chart";
import BarChart from "./charts/bar_chart";
import LineChart from "./charts/line_chart";

global.$ = global.jQuery = $;
global.PieChart = PieChart;
global.BarChart = BarChart;
global.LineChart = LineChart;

$(document).ready( function () {
    let formName = document.querySelector(".content-body form").name;
    let elSections = document.querySelector(`form[name='${formName}'] #${formName}_sections`);

    if (elSections) {
        new Sortable(elSections, {
            invertSwap: true,
            onUpdate: function () {
                const sortablePositions = $(`#${formName}_sections .position`);

                for (let i = 0; i < sortablePositions.length; i++) {
                    $(sortablePositions[i]).val(i);
                }
            },
        })
    }

    $('.select2.data-select').select2({
        tags: true,
        width: '100%'
    });
})
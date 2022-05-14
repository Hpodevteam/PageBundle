import Sortable from 'sortablejs';

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
})
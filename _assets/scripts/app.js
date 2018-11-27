const css = require('../styles/app.scss');


import 'bootstrap';
import 'popper.js';
import './wvt.js';
import flatpickr from "flatpickr";


window.onload = function() {
    $('[data-toggle="tooltip"]').tooltip({
        boundary: 'window'
    });

    flatpickr(".flatpickr", {
        dateFormat: "d-m-Y",
    });
} //window on load

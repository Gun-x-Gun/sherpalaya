import './bootstrap';

import AOS from "aos";
import "flyonui/flyonui";
import { animate, inView } from "motion";


document.addEventListener('DOMContentLoaded', (e) => {
    AOS.init();
    window.motion = {
        animate, inView
    };
});

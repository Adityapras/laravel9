import "./bootstrap";
import 'flowbite';

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
import { Datepicker, Input, initTE, Carousel, Sidenav, Ripple } from "tw-elements";

initTE({ Datepicker, Input, Carousel, Sidenav, Ripple });
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

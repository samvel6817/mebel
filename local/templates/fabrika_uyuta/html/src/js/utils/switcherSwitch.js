import $ from 'jquery';

import {setClass} from "./setClass";

export function switcherSwitch(switcherControl, needState = 'needSwitch') {
    const $switcherControl = $(switcherControl);
    const $switcherContainer = $switcherControl.closest('.js-switcher');
    const $switcherFirstTitle = $switcherContainer.find('.js-switcher-first-title');
    const $switcherSecondTitle = $switcherContainer.find('.js-switcher-second-title');

    if (needState === 'enable') {
        setClass($switcherControl, 'enabled', 'disabled');
        setClass($switcherFirstTitle, 'disabled', 'enabled');
        setClass($switcherSecondTitle, 'enabled', 'disabled');
    } else if (needState === 'disable') {
        setClass($switcherControl, 'disabled', 'enabled');
        setClass($switcherFirstTitle, 'enabled', 'disabled');
        setClass($switcherSecondTitle, 'disabled', 'enabled');
    } else if (needState === 'needSwitch') {
        $switcherControl.toggleClass('disabled enabled');
        $switcherFirstTitle.toggleClass('disabled enabled');
        $switcherSecondTitle.toggleClass('disabled enabled');
    }
}

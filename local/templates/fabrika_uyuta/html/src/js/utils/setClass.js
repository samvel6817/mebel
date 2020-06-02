import $ from 'jquery';

export function setClass(elem, classToAdd, classToRemove) {
    $(elem).addClass(classToAdd);
    $(elem).removeClass(classToRemove);
}

import $ from 'jquery';

export function toggleText(elem, firstText, secondText) {
    if ($(elem).text() === firstText) {
        $(elem).text(secondText);
    } else {
        $(elem).text(firstText);
    }
}

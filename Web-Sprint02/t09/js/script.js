function getFormattedDate(dateObject) {
    let week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    let format = "";
    let d = dateObject;
    d = ['0' + dateObject.getHours(), '0' + dateObject.getMinutes()].map(component => component.slice(-2));
    if (dateObject.getDate() < 10) {
        format = format + '0' + dateObject.getDate() + '.';
    }
    else {
        format = format + dateObject.getDate() + '.';
    }
    if (dateObject.getMonth() < 10) {
        format = format + '0' + (dateObject.getMonth() + 1) + '.';
    }
    else {
        format = format + (dateObject.getMonth() + 1) + '.';
    }
    format = format + dateObject.getFullYear() + ' ';

    format += d.slice(0, 2).join(':') + ' ';

    format += week[dateObject.getDay()];

    return format;

}
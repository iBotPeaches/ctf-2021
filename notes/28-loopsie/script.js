var fullString = '';
$(".badge").each(function () {
    fullString = fullString.concat($(this).hasClass('badge-info') ? '1' : '0')
});
console.log(fullString);
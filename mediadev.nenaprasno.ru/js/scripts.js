$(document).ready(function () {
    $('[data-toggle]').toggler();
});

$('.article-block a').each(function(){
    $(this).attr('target', '_BLANK');
});

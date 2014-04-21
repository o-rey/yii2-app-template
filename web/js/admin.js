// Custom confirmation
yii.allowAction = function ($e) {
    var message = $e.data('confirm');
    if (message === undefined) {
        return true
    } else if ($e.data('_confirm')) {
        $e.html("Deleting...");
        return true;
    } else {
        $e.data('_confirm', true);
        $e.html(message);
    }
    return false;
}

// Offcanvas
$(document).ready(function() {
    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });
});

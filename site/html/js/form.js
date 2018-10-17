$(function() {

    // contact form animations
    $('#comment').click(function() {
        $('#commentForm').fadeToggle();
    })
    $(document).mouseup(function (e) {
        var container = $("#commentForm");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            container.fadeOut();
        }
    });

});
$("#search").click(function() {
    $.post(
        "/internship-apply",
        {
            'location': $('#location').val(),
            'email': $('#email').val(),
            'studies': $('#studies').val()
        });
});
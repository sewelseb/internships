$("#search").click(function() {
    $.post(
        "index.php?page=SaveUserInput",
        {
            'location': $('#location').val(),
            'email': $('#email').val(),
            'studies': $('#studies').val()
        });
});
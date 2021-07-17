
$('#create-user').on('submit', function (event) {
    // using this page stop being refreshing
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '../_ajax/add_user.php',
        data: $('#create-user').serialize(),
        success: function (data) {
            let parsed = JSON.parse(data);
            console.log(parsed);
        }
    });
});


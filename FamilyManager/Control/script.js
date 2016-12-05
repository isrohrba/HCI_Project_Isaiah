var form = document.querySelector("form");
var submitButton = document.querySelector("form input[type=submit]");

function changeAction($passfail) {
    if ($passfail === "pass") {
        form.action = "../View/confirmAccount.php";
    }
    else {
        form.action = "../View/register.php";
    }
}

function changeActionTest($first, $second, $last, $email, $password) {
    var $checkFirst = $first.match(/[^a-zA-Z0-9]/);
    var $checkSecond = $second.match(/[^a-zA-Z0-9]/);
    var $checkLast = $last.match(/[^a-zA-Z0-9]/);
    var $checkEmail = $email.match(/[^a-zA-Z0-9]/);
    var $checkPass = $password.match(/[^a-zA-Z0-9]/);
    
    if ($checkFirst === true || $checkSecond === true || $checkLast === true || $checkEmail === true || $checkPass === true) {
        form.action = "../View/confirmAccount.php";
    }
    else {
        form.action = "../View/register.php";
    }
}

var rows = $('table tr');

$('#editButton').click(function() {
    var black = rows.filter('#edit').show();
    var white = rows.filter('#current').hide();
});

$('#saveButton').click(function() {
    var black = rows.filter('#edit').hide();
    var white = rows.filter('#current').show();
})

/*function changeView() {
    $("#edit").slideToggle("fast");
}*/

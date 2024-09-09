const tentang = ["about1", "about2", "visi", "misi"];

tentang.forEach((name) => {
    $("#" + name).dblclick(function () {
        $("#" + name).hide();
        $("#" + name + "_input").val($("#" + name).html());
        $("#" + name + "_input").show();
        $("#" + name + "_input").focus();
    });

    $("#" + name + "_input").blur(function () {
        textChanged(name, "tentang");
    });

    $("#" + name + "_input").keypress(function (e) {
        var key = e.which;
        if (key == 13) {
            textChanged(name, "tentang");
            return false;
        }
    });
});

const kontak = ["location", "phone", "email"];

kontak.forEach((name) => {
    $("#" + name).dblclick(function () {
        $("#" + name).hide();
        $("#" + name + "_input").val($("#" + name).html());
        $("#" + name + "_input").show();
        $("#" + name + "_input").focus();
    });

    $("#" + name + "_input").blur(function () {
        textChanged(name, "kontak");
    });
    $("#" + name + "_input").keypress(function (e) {
        var key = e.which;
        if (key == 13) {
            textChanged(name, "kontak");
            return false;
        }
    });
});

function textChanged(name, path) {
    $("#" + name + "_input").hide();
    if($("#" + name + "_input").val() == "") {
        $("#" + name + "_input").val($("#" + name).html());
        $("#" + name).show();
        return;
    } else {
        $("#" + name).html($("#" + name + "_input").val());
        $("#" + name).show();
    }

    // Here update the database
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "/" + path + "/" + name,
        data: {
            isi: $("#" + name + "_input").val(),
        },
        success: function () {
            console.log("Updated " + name);
        },
    });
}

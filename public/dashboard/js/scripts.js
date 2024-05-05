/*!
 * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
//
// Scripts
//
$("input").attr("autocomplete", "off");

function valid() {
    let name = $('input[name="name"]').hasClass("is-valid");
    let price = $('input[name="price"]').hasClass("is-valid");
    if (name && price) {
        $("button").removeClass("disabled");
    } else {
        $("button").addClass("disabled");
    }
}

window.addEventListener("DOMContentLoaded", (event) => {
    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector("#sidebarToggle");
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener("click", (event) => {
            event.preventDefault();
            document.body.classList.toggle("sb-sidenav-toggled");
            localStorage.setItem(
                "sb|sidebar-toggle",
                document.body.classList.contains("sb-sidenav-toggled")
            );
        });
    }
});

// intern

// input validation
function validate(data) {
    let input = $('input[name="' + data + '"]').val();
    let form;
    if (data == "name") {
        form = {
            name: input,
        };
    } else if (data == "price") {
        form = {
            price: input,
        };
    }
    $.ajax({
        url: "/check",
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('input[name="_token"]').val(),
        },
        data: form,
        success: function (result) {
            $('input[name="' + data + '"]').removeClass("is-invalid");
            $('input[name="' + data + '"]').addClass("is-valid");
            valid();
        },
        error: function (xhr, status, error) {
            // Handle error response
            let errors = xhr.responseJSON.errors;
            // Display validation errors to the user
            $('input[name="' + data + '"]').removeClass("is-valid");
            $('input[name="' + data + '"]').addClass("is-invalid");
            $("#" + data + "error").html(Object.values(errors)[0]);
            valid();
        },
    });
}

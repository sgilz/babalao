$(document).on("click", ".btn-add", function(e) {
        e.preventDefault();

        var controlForm = $("#specs-form-group:first"),
            currentEntry = $(this).parents(".specs-input-group:first"),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find("input").val("");
        controlForm
            .find(".specs-input-group:not(:last) .btn-add")
            .removeClass("btn-add")
            .addClass("btn-remove")
            .removeClass("btn-outline-primary")
            .addClass("btn-outline-danger")
            .html('<i class="fas fa-minus" aria-hidden="true"></i>');
    })
    .on("click", ".btn-remove", function(e) {
        $(this)
            .parents(".specs-input-group:first")
            .remove();

        e.preventDefault();
        return false;
    });

$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

/**
 * Dependencies
 */
require("bootstrap");
const $ = require("jquery");

var Turbolinks = require("turbolinks");
Turbolinks.start();

$(document).on("turbolinks:load", function () {
    /**
     * Shadow hover
     */
    $(".product").hover(
        function () {
            $(this).addClass("shadow");
        },
        function () {
            $(this).removeClass("shadow");
        }
    );

    /**
     * AJAX setup
     */
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    /**
     * Add to cart
     */
    $("button.product-add-to-cart, button.single-product-add-to-cart").click(
        function (event) {
            const id = $(event.currentTarget).data("id");

            $.post(`/cart/${id}`).done((data) => {
                if (data === "added")
                    $("#count").text(parseInt($("#count").text()) + 1);
            });
        }
    );
});

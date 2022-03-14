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
     * Quantity
     */
    $(".single-product-quantity-decrease").on("click", function () {
        const quantityElement = $(".single-product-quantity-number");
        const priceElement = $(".single-product-price");

        const quantity = parseInt(quantityElement.text());
        const newQuantity = quantity - 1;
        if (newQuantity >= 1) {
            quantityElement.text(newQuantity);

            const price = parseFloat(priceElement.data("original-price"));
            priceElement.text("$" + (price * newQuantity).toFixed(2));
        }
    });

    $(".single-product-quantity-increase").on("click", function () {
        const quantityElement = $(".single-product-quantity-number");
        const priceElement = $(".single-product-price");

        const quantity = parseInt(quantityElement.text());
        const newQuantity = quantity + 1;
        quantityElement.text(newQuantity);

        const price = parseFloat(priceElement.data("original-price"));
        priceElement.text("$" + (price * newQuantity).toFixed(2));
    });
});

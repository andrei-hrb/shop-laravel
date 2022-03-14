/**
 * Dependencies
 */
require("bootstrap");
const $ = require("jquery");

var Turbolinks = require("turbolinks");
Turbolinks.start();

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
$(".product-quantity-decrease").on("click", function () {
    const id = $(this).data("id");
    const quantityElement = $(`.product-quantity-number[data-id='${id}']`);
    const quantity = parseInt(quantityElement.text());
    const newQuantity = quantity - 1;
    if (newQuantity >= 1) quantityElement.text(newQuantity);
});

$(".product-quantity-increase").on("click", function () {
    const id = $(this).data("id");
    const quantityElement = $(`.product-quantity-number[data-id='${id}']`);
    const quantity = parseInt(quantityElement.text());
    const newQuantity = quantity + 1;
    quantityElement.text(newQuantity);
});

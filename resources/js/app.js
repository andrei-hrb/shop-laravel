/**
 * Dependencies
 */
require("bootstrap");
const $ = require("jquery");

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
 * Search
 */
$("#search").on("input", function () {
    const value = $(this).val().toLowerCase();
    let found = 0;

    $(".card.d-block").each(function () {
        const json_data = $(this).data("json");
        const string_data = (
            json_data.title +
            " " +
            json_data.description +
            " " +
            json_data.category
        ).toLowerCase();

        string_data.includes(value)
            ? $(this).parent().removeClass("d-none").addClass("d-block")
            : $(this).parent().removeClass("d-block").addClass("d-none");

        found += string_data.includes(value);
    });

    found === 0
        ? $("#fof").removeClass("d-none").addClass("d-block")
        : $("#fof").removeClass("d-block").addClass("d-none");
});

/**
 * Quantity
 */
$(".product-quantity-decrease").on("click", function () {
    const id = $(this).data("id");
    const quantityElement = $(`.product-quantity[data-id='${id}']`);
    const quantity = parseInt(quantityElement.text());
    const newQuantity = quantity - 1;
    if (newQuantity >= 1) quantityElement.text(newQuantity);
});

$(".product-quantity-increase").on("click", function () {
    const id = $(this).data("id");
    const quantityElement = $(`.quantity[data-id='${id}']`);
    const quantity = parseInt(quantityElement.text());
    const newQuantity = quantity + 1;
    quantityElement.text(newQuantity);
});

$(".dropdown-menu li a").click(function(){
    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>' );
    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
});

function enable_cart() {
    if ((document.getElementById("material").value != "Select Material") &&
        (document.getElementById("size").value != "Select Size") && (document.getElementById("stone").value != "Select Stone")) {
        document.getElementById("add_to_cart").disabled = false;
    }
}
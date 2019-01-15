$(document).ready(function(){
    // $('[id^=phone]').keypress(validateNumber);
    // getCart();
    // updateCount();
    window.onload = updateCount();
    window.onload = totalmoney();
});
jQuery('.pd-box-color').click(function(){
    jQuery('.pd-box-color').removeClass('choosen');
    jQuery(this).addClass('choosen');
});
$(document).on("click", "#g-color", function () {
    var myBookId = $(this).data('id');
    $("#id_produc").val( myBookId );
});
function updateCount() {
    $.get(base_url+'/ajax/update_count', function(data) {
        $("#simpleCart_quantity").html(data);
        $("#simpleCart_quantity_2").html(data);
    });
}
// function getCart() {
//     $.get(base_url+'/ajax/get_cart', function(data) {
//         $("#cart_content").html(data);
//     });
// }
function totalmoney() {
    $.get(base_url+'/ajax/totalmoney', function(data) {
        $("#totalmoney").html(data);
        $("#totalmoney2").html(data);
        $("#totalmoney3").html(data);
    });
}
function addCart(id) {
    if (id>0)
    {
        var qty = $("#qty").val();
        if (qty == undefined)
        {
            var qty = 1;
        }
        $.post(base_url+'/ajax/cart', {id: id,qty:qty}, function( data ) {
            updateCount();
            $("#cartsp").html(data);
            totalmoney();
        });
    }
}
function Emptycart() {
    $.get(base_url+'/ajax/emptycart', function(data) {
        $("#simpleCart_quantity").html('0');
        totalmoney();
    });
}
function removecart(rowid) {
    if (rowid && window.confirm('Bạn có muốn xóa sản phẩm này không'))
    {
        $("#cart_"+rowid).html('');
        $.post(base_url+'/ajax/remove_cart', {rowid:rowid}, function( data ) {
            $('#cart_'+rowid).remove();
            updateCount();
            totalmoney();
        });
    }
    return;
}
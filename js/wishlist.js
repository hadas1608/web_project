var wishList = JSON.parse(localStorage.getItem("wishList") || "[]");

function displayWishList() {
    var orderedProductsTblBody = document.getElementById("orderedProductsTblBody");
    // //ensure we delete all previously added rows from ordered products table
    while (orderedProductsTblBody.rows.length > 0) {
        orderedProductsTblBody.deleteRow(0);
    }

    // //iterate over array of objects
    console.log("# of items: " + (JSON.parse(localStorage.wishlist)).length);
    var inner_wishlist = JSON.parse(localStorage.wishlist);
    for (var i = 0; i < inner_wishlist.length; i++) {
        product = inner_wishlist[i];
        //add new row
        row = orderedProductsTblBody.insertRow();
        //create html
        html = "</tr><td class=\"col-sm-8 col-md-6\">\n" +
            "<div class=\"media\">\n" +
            "<img class=\"media-object\" src='"+product.Picture+"'>\n" +
            "<div class=\"media-body\"><h4 id=\"product_name\">"+ product.Name+"</h4></div>\n" +
            "</div>\n" +
            "</td>\n" +
            "<td class=\"col-sm-1 col-md-1 text-center\">\n" +
            "<strong>"+product.Price+"</strong>\n" +
            "</td>\n" +
            "<td class=\"col-sm-1 col-md-1\">\n" +
            "<button type=\"button\" class=\"btn btn-warn\">Add to cart</button>\n" +
            "</td>\n";

        row.innerHTML = html;
    }
}

function formFalse() {
    return false;
}

function AddtoWishList(customized=false)
{
    //JavaScript Object that will hold three properties:Name,price and picture
    var singleProduct = {};
    //Fill the product object with data
    if (customized)
    {
        singleProduct.Name="Customized Ring";
        singleProduct.Price='600$';
        singleProduct.Picture='img/rings/ring5.jpg';
    }
    else
    {
        singleProduct.Name = document.getElementById("product_name").innerHTML;
        singleProduct.Price = document.getElementById("product_price").innerHTML;
        singleProduct.Picture = document.getElementById("product_picture").getAttribute("src");
    }

    //Add newly created product to the shopping cart
    var oldItems = JSON.parse(localStorage.getItem('wishlist')) || [];
    oldItems.push(singleProduct);
    localStorage.setItem('wishlist', JSON.stringify(oldItems));


    //call display function to show on screen
    // displayWishList();
    return false;


}
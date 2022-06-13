$(document).ready(function(){

    $(".vip").click(function(){

        const x = $(this).parent().siblings();
        // console.log(x[0].innerHTML);



        const product_name = x[0].innerHTML;
        $(".pr_name").val(product_name);

        const model = x[1].innerHTML;
        $(".mod").val(model);

        const deal_price = x[2].innerHTML;
        $(".dlprice").val(deal_price);

        const sell_price = x[4].innerHTML;
        $(".slprice").val(sell_price);

        const quantity = x[5].innerHTML;
        $(".qntity").val(quantity);


        // const brand_name = x[3].innerHTML;
        const brand_name = "dlink";
        var y = $(".brand_select option:contains("+brand_name+")").attr("selected","selected");
        console.log(y);





    });





});
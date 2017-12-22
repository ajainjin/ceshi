$(function(){
    index_designed = {
        data:{},
        start:function(){
            this.shopcart_isNull();
            this.shopcart_isFull();
            this.delate_goods();
            this.fenlei_two();
            //this.count_down();
            this.zx_fenlei();
            this.fenlei_hover();
            this.goods_fenlei();
        },
        goods_fenlei:function(){
            $(".all-categories-detail").children('li').slice(7).remove();
        },
        shopcart_isNull:function(){},
        shopcart_isFull:function(){},
        fenlei_two:function(){
            $(".create-fl").hover(function() {
               $(this).find('.fenlei-detail-block,.triangle').stop().slideToggle('fast');
            });
        },
        delate_goods:function(){
            //购物车快速删除
             $('.delate-goods').on('click','.delate-goods',function(e){
                 e.stopPropagation();
                 var cr_btn = $(this);
                 cr_btn.text('删除中..');
                 $.getJSON(cr_btn.prop('href'),function(re){
                     if(re){
                         cr_btn.closest('.shopcart-goods-li').fadeOut(function(){
                             $(this).remove();
                             var cart_count = parseInt($('.cart-count').text());
                             if(!isNaN(cart_count) && cart_count>1){
                                $('.cart-count').text(--cart_count);
                            }else{
                                $('.cart-count').addClass('hidden');
                            }

                         });
                     }
                 });
                 return false;
             });
        },
        
        zx_fenlei:function(){
            $(".zx-more-fenlei").hover(function() {
                $(this).children('a').css('color', '#fc6628');
                $(this).css('borderBottom', '3px solid #fc6628');
            }, function() {
                $(this).children('a').removeAttr('style');
                $(this).removeAttr('style');
            });
        },
        fenlei_hover:function(){}
    };
    index_designed.start();
    //分页样式内容修改
    //$('#pagenext').remove();
});

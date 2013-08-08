$(function(){
    $('.cate_list>li>a').click(function(){
        $(this).parent().find('ul').toggle();
        return false;
    });
});
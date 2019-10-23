$(document).ready(function(){
    $(".add-compare").click(function(){
        var data = $(".compare-package").attr("data-id");
        var thisId = $(this).data('id')
        if(!data){
            data = [{
             id : thisId
            }]
            alert('a')
        }
        else{
            alert('b')
            data.push({
                id : thisId
            })
        }
        console.log(data)
        $(".compare-package").attr("data-id",data)
    })

    if($(".menu-detail-package").length==1){
        var menu = ".menu-detail-package"
        var posMenu = $(menu).offset()
        $(window).scroll(function(){
            var pos = $(window).scrollTop()
            if(pos>=posMenu.top){
                $(menu).addClass("fixedtrue")
                $(menu).css("top","76px")
            }
            else{
                $(menu).removeClass("fixedtrue")
                $(menu).css("top","0px")
            }
        })

        $(".nav-pills .nav-item .nav-link").click(function(e){
            e.preventDefault()
            var section = $(this).attr("href")
            $("body,html").animate({"scrollTop" : $(section).offset().top-150},1200)
        })
    }
})
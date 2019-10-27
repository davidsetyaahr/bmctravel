$(document).ready(function(){
    $(".to-top").click(function(){
        $("body,html").animate({"scrollTop":0},1200)
    })
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
                $(menu).css("top","71px")
            }
            else{
                $(menu).removeClass("fixedtrue")
                $(menu).css("top","0px")
            }
        })

        $(".nav-pills .nav-item .nav-link").click(function(e){
            e.preventDefault()
            var section = $(this).attr("href")
            $("body,html").animate({"scrollTop" : $(section).offset().top-140},1200)
        })
    }
})
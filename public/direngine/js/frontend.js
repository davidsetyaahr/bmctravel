$(document).ready(function(){
    $(".to-top").click(function(){
        $("body,html").animate({"scrollTop":0},1200)
    })
    $(".navbar-toggler").click(function(){
        $(".nav-white").toggleClass("scrolled")
        $(".nav-white").toggleClass("awake")
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
                $(".nav-white").removeClass("nav-shadow")
            }
            else{
                $(".nav-white").removeClass("nav-shadow")
                $(menu).removeClass("fixedtrue")
                $(menu).css("top","0px")
            }
        })

        $(".nav-pills .nav-item a").click(function(e){
            e.preventDefault()
            var display = $(".menu-detail-package").css("display")
            var navHeight2 = $(".menu-detail-package").innerHeight()
            if(display=="none"){
                navHeight2 = 0;
            }
            
            var navHeight = $(".nav-white").innerHeight();
            var section = $(this).attr("href")
            if(!$(this).data("toggle")){
                $("body,html").animate({"scrollTop" : $(section).offset().top-(navHeight+navHeight2)},1200)
            }
        })
    }
            $(".custom-dropup").click(function(){
                $(".custom-dropup .dropup-content").toggleClass("active")
            })

})
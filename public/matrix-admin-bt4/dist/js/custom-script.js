$(document).ready(function(){

    setInterval(getNotif,2000)
    function getNotif(){
        var url = $(".interval").data("url")
        $.ajax({
            url : url,
            success : function(data){
                if(data>0){
                    $("#countNotif").html(data)
                }
                else{
                    $("#countNotif").html("")
                }
            }
        })
    }

    $(".link-notif").click(function(){
        var url = $(this).data("url")

        $.ajax({
            url : url,
            success : function(data){
                $("#loopNotif").html(data)
            }
        })
    })

    $("select").select2()
    $(".noSelect").select2('destroy')

    $(".close-gallery, .open-gallery").click(function(e){
        e.preventDefault()
        if($(".disable-mode.on").length==1){
            $(".gallery").addClass("hide-gallery")
            $(".disable-mode").removeClass("on")
        }
        else{
            $(".gallery").removeClass("hide-gallery")
            $(".disable-mode").addClass("on")
        }
        $(".disable-mode.on").click(function(){
            $(".gallery").addClass("hide-gallery")
            $(".disable-mode").removeClass("on")
        })
    })
    
    $(".add-new").click(function(e){
        e.preventDefault()
        $(".changeCombo").change(function(){
            changeCombo($(this))
        })
        var html = $("<div />").append($("#room").clone()).html();
        $(".room").append(html)
        $("select").select2()

    })
    function zoomRemove(){
        $(".zoom").click(function(){
            var dataSrc = $(this).data('src')
            $("#zoomImage").modal("hide")
            $("#zoomImage").modal("show")
            $("#zoomImage .modal-dialog .modal-content .modal-body img").attr("src",dataSrc)
        })
        
        $(".remove").click(function(){
            var dataId = $(this).data("id")
            $(".row-gallery .col-gallery[data-id='"+dataId+"']").remove()
            $(".gallery .grid-container .grid[data-id='"+dataId+"'] .blue-overlay").removeClass("active")

            if(type=="single"){
                $(hiddenId).val('')
            }
            else{
                var arrVal = $(hiddenId).val().split(',')
                function newVal(arrVal){
                    return arrVal != dataId
                }
                var newValue = arrVal.filter(newVal)
                $(hiddenId).val(newValue)
            }
        })
    }
    function clickGallery(){
    $(".gallery .grid-container .grid").click(function(){
        var id = $(this).data("id")
        var type = $(".gallery").data("type")
        var tag = ".gallery .grid-container .grid .blue-overlay"
        var perImg = ".gallery .grid-container .grid[data-id='"+id+"'] .blue-overlay";
        var src = $(perImg+" img").attr("src")
        var hiddenId = "#id_gallery"
        if($(perImg+".active").length==0){
            if(type=="single"){
                $(tag).removeClass("active")
                $(".col-gallery").remove()
                $(hiddenId).val(id)
            }
            else{
                var getVal = $(hiddenId).val()
                if(getVal==""){
                    $(hiddenId).val(id)
                }
                else{
                    $(hiddenId).val(getVal+","+id)
                }
            }
            $(perImg).toggleClass("active")
            $(".row-gallery").append('<div class="col-md-2 mb-3 col-gallery" data-id="'+id+'"><div class="img blue-overlay"><img src="'+src+'" class="img-fluid" alt=""><div class="overlay"></div><div class="option"><span class="zoom" data-src="'+src+'">Open</span> <span class="remove" data-id="'+id+'">X Remove</span></div></div></div>')

            zoomRemove()
        }
    })
}
    zoomRemove()
    clickGallery()
    $(".category-gallery").click(function(e){
        e.preventDefault()
        var dataId = $(this).data("id")
        var dataUrl = $(this).data("url")
        
        $(".grid").remove()

        $.ajax({
            type : "get",
            data : {"id_category" : dataId},
            url : dataUrl,
            success : function(data){
                $.each(data.gallery, function(index,value){
                    if($(".col-gallery").length>0){
                        var getId = $(".col-gallery").data("id")
                        var active = getId==value.id_gallery ? 'active' : ''
                    }
                    else{
                        var active = ''
                    }
                    $(".grid-container").append('<div class="grid" data-id="'+value.id_gallery+'"><div class="blue-overlay '+active+'"><div class="overlay"></div><img src="'+data.url+'/images/gallery/'+value.img+'"><span class="mdi mdi-check-circle-outline mdi-36px"></span></div></div>')
                })
                clickGallery()
            }
        })
        
    })
    $(".new-trip").click(function(e){
        e.preventDefault()
        var url = $("#url").val()
        var day = $(this).attr('data-day')
        var dayElement = ".day[data-day='"+day+"']"
        var countTrip = $(dayElement).attr('data-count')
        var newCountTrip = parseInt(countTrip) + 1
        $(dayElement).attr('data-count',newCountTrip)
        $.ajax({
            type : 'get',
            url : url,
            data : {day : day, trip : newCountTrip},
            success : function(data){
                $(dayElement+" .append-trip").append(data)
                $("select").select2()
                $(dayElement+" .row-trip[data-trip='"+newCountTrip+"'] .checkHotel").change(function(){
                    checkHotel($(this))
                })
        
                removeTrip()
            }
        })
    })

    function removeTrip(){
        $(".remove-trip").click(function(e){
            e.preventDefault()
            var day = $(this).data('day')
            var trip = $(this).data('trip')
            var dataCount = ".day[data-day='"+day+"']"
            var count = parseInt($(dataCount).attr('data-count'))
            $(dataCount).attr('data-count',count-1)
            $(dataCount+" .row-trip[data-trip='"+trip+"']").remove()
        })
    }
    removeTrip()
    
    function checkHotel(thisParam){
        var day = thisParam.data('day')
        var trip = thisParam.data('trip')
        var thisVal = thisParam.val()
        var selector = ".day[data-day='"+day+"'] .row-trip[data-trip='"+trip+"'] .append-hotel"
        if(thisVal==1){
            $.ajax({
                type : "get",
                url : 'gethotel',
                data : {day : day, trip : trip},
                success : function(data){
                    $(selector).append(data)
                    $("select").select2()

                    $(".changeHotel").change(function(){
                        var thisData = $(this).val()
                        var target = $(this).data("target")
                
                        $(target)
                        .find('option')
                        .remove()
                        .end()
                        .append("<option  value=''>---Option---</option>")
                        
                        $.ajax({
                            type : "get",
                            data : {"id_hotel" : thisData},
                            url : "getKodeHotel",
                            success : function(data){
                                $.each(data, function(index, value){
                                    $(target).append($("<option></option>").attr("value",value.id_room_hotel).text(value.room_name))
                                })
                            }
                        })
                    })
                }
            })
        }
        else{
            if($(selector+" .changeRoom").length==1){
                $(selector+" .changeRoom").remove()
            }
        }
    }
        $(".checkHotel").change(function(){
            checkHotel($(this))
        })
    $(".new-calc").click(function(e){
        e.preventDefault()
        var url = $(this).data("url")
        var count = parseInt($(".place-calc").attr("data-count"))
        var newId = count+1
        $.ajax({
            type : "get",
            url : url,
            data : {id:newId},
            success : function(data){
                $(".place-calc").attr("data-count", newId)
                $(".place-calc").append(data)
                $("select").select2()
                eventCalc()
            }
        })
    })
    function eventCalc(){
        $(".calc").change(function(){
            calc($(this))
            if($(this).data('type')=="select"){
                var label = $(this).find(":selected").attr("data-label")
                var dataId = $(this).data("id")

                $("#hidden"+dataId).val(label)
            }
        })
        $(".calc").keyup(function(){
            calc($(this))
        })
    }
    eventCalc()
    function rupiah(bilangan){
        var	reverse = bilangan.toString().split('').reverse().join(''),
        ribuan 	= reverse.match(/\d{1,3}/g);
        ribuan	= ribuan.join('.').split('').reverse().join('');
        return ribuan
    }
    function calc(thisParam){
        var dataId  = $(thisParam).data('id')
        var thisVal = parseInt(thisParam.val())
        var target = thisParam.data('target')
        var valTarget = parseInt($(target).val())
        thisVal = Number.isNaN(thisVal) ?  0 : thisVal
        var subtotal = thisVal * valTarget
        $("#subtotal"+dataId).val(subtotal)

        var total = 0
        $(".subtotal").each(function(){
            total = total + parseInt($(this).val())
        })

        var price = parseInt($("#profit").data("price"))
        var profit = price-total
        var percent = parseInt(profit/price*100)
        $("#profit #percent").html(percent)
        $("#profit #change").html(rupiah(profit))
        $("#idr #change").html(rupiah(total))
    }

    $("#accPayment").click(function(){
        acc()
    })
    $(".statusReview").click(function(){
        acc()
    })

    function acc(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You accept this",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Accept this'
          }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Success'
              )
            }
          })
    }

})
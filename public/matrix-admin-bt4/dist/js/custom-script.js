$(document).ready(function(){
    $("select").select2()
    $(".close-gallery, .open-gallery").click(function(e){
        e.preventDefault()
        $(".gallery").toggleClass("hide-gallery")
    })
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
    })
})
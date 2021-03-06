$(document).ready(function() {
    $(".to-top").click(function() {
        $("body,html").animate({ scrollTop: 0 }, 1200);
    });
    if ($("body.my-account").length == 1) {
        setInterval(getNotif, 2000);
        function getNotif() {
            var url = $(".banner-account").data("notif");
            $.ajax({
                url: url,
                success: function(data) {
                    if (data > 0) {
                        $("#countNotif").html(data);
                    } else {
                        $("#countNotif").html("");
                    }
                }
            });
        }
    }
    $(".navbar-toggler").click(function() {
        $(".nav-white").toggleClass("scrolled");
        $(".nav-white").toggleClass("awake");
    });
    $(".add-compare").click(function() {
        var id = $(this).attr("for");
        var spanCount = ".compare-package p span";
        var dataId = $(".compare-package").data("id");
        dataId.push(id);
        var count = parseInt($(spanCount).html());
        var check = $(".checkCompare#" + id);
        check.removeAttr("disabled");
        if (check.is(":checked")) {
            count--;
            $(".compare-package").attr("data-id", dataId.toString());
        } else {
            if (count == 2) {
                check.attr("disabled", true);
            } else {
                count++;
                $(".compare-package").attr("data-id", dataId.toString());
            }
        }
        $(spanCount).html(count);
    });
    $(".compare-package").click(function() {
        var id = $(this).attr("data-id");
        var url = $(this).data("url");
        $(".bg-compare").remove();
        $.ajax({
            type: "get",
            data: { id: id },
            url: url,
            success: function(data) {
                $("body").prepend(data);
                $(".close-compare").click(function() {
                    $(".bg-compare").remove();
                });
            }
        });
    });

    $(".wishlist").click(function() {
        var id = $(this).attr("id");
        var dataId = $(this).data("id");

        $.ajax({
            type: "get",
            data: { id_tour: dataId },
            url: "tour-package/wishlist",
            success: function(data) {
                if (data == "empty") {
                    alert("login dulu");
                } else if (data == "added") {
                    $("#" + id + " span").addClass("added");
                } else {
                    $("#" + id + " span").removeClass("added");
                }
            }
        });
    });

    $(".btn-tour-finder").click(function(e) {
        e.preventDefault();

        $(".tour-finder").addClass("show");
    });

    $(".close-finder").click(function() {
        $(".tour-finder").removeClass("show");
    });

    if ($(".menu-detail-package").length == 1) {
        var menu = ".menu-detail-package";
        var posMenu = $(menu).offset();
        $(window).scroll(function() {
            var pos = $(window).scrollTop();
            if (pos >= posMenu.top) {
                $(menu).addClass("fixedtrue");
                $(menu).css("top", "71px");
                $(".nav-white").removeClass("nav-shadow");
            } else {
                $(".nav-white").removeClass("nav-shadow");
                $(menu).removeClass("fixedtrue");
                $(menu).css("top", "0px");
            }
        });

        $(".nav-pills .nav-item a").click(function(e) {
            e.preventDefault();
            var display = $(".menu-detail-package").css("display");
            var navHeight2 = $(".menu-detail-package").innerHeight();
            if (display == "none") {
                navHeight2 = 0;
            }

            var navHeight = $(".nav-white").innerHeight();
            var section = $(this).attr("href");
            if (!$(this).data("toggle")) {
                $("body,html").animate(
                    {
                        scrollTop:
                            $(section).offset().top - (navHeight + navHeight2)
                    },
                    1200
                );
            }
        });
    }
    $(".custom-dropup").click(function() {
        $(".custom-dropup .dropup-content").toggleClass("active");
    });
    $(".formNoLoad").submit(function(e) {
        e.preventDefault();
        let url = $(this).attr("action");
        let formData = $(this).serializeArray();

        $.ajax({
            type: "post",
            data: formData,
            url: url,
            beforeSend: function() {
                $(".loading").addClass("show");
            },
            success: function(response) {
                $(".loading").removeClass("show");
                if (response["success"] == "error") {
                    $.each(response, function(index, value) {
                        if (value == "") {
                            $("#" + index).removeClass("inputError");
                        } else {
                            $("#" + index).addClass("inputError");
                        }
                        $(".error[data-id='" + index + "']").html(value);
                    });
                } else {
                    window.location = response["redirect"];
                }
            }
        });
    });

    $(".table-booking.choose tbody tr").click(function() {
        var startDate = $(this).data("start");
        $(".table-booking tbody tr").removeClass("selected");
        $(this).addClass("selected");
        $("#start_date").val(startDate);
    });

    $(".next.page2").click(function(e) {
        e.preventDefault();
        var startDate = $("#start_date").val();
        var tour = $("#id_tour").val();
        var url = $("#formStep2").attr("action");
        $.ajax({
            type: "get",
            data: { start_date: startDate, tour: tour },
            url: url,
            success: function(data) {
                if (data["msg"] == "success") {
                    window.location = "?page=3";
                } else if (data["msg"] == "empty") {
                    $(".for-alert").html(
                        "<div class='alert alert-danger'><span class='bold'>Error</span>. Choose a date</div>"
                    );

                    $("body,html").animate({ scrollTop: 0 }, 1200);
                }
            }
        });
    });

    $(".next.page3").click(function(e) {
        e.preventDefault();
        var pax = $("#nilai").val();
        var url = $(".body-data").data("url");
        $.ajax({
            type: "get",
            data: { pax: pax },
            url: url,
            success: function(data) {
                if (data["msg"] == "success") {
                    window.location = "?page=4";
                } else if (data["msg"] == "empty") {
                    $(".for-alert").html(
                        "<div class='alert alert-danger'><span class='bold'>Error</span>. Error pax or person</div>"
                    );
                }
            }
        });
    });

    $(".next.page4").click(function(e) {
        e.preventDefault();

        var form = $("#formUpload")[0];
        var frmData = new FormData(form);
        var action = $("#formUpload").attr("action");
        $.ajax({
            type: "post",
            url: action,
            data: frmData,
            cache: false,
            processData: false,
            dataType: "json",
            contentType: false,
            success: function(data) {
                window.location = "?page=5";
            }
        });
    });

    $("#nilai").keyup(function() {
        getTotal();
    });

    $(".plus-minus").click(function(e) {
        e.preventDefault();
        getTotal();
    });
    $("#fileUpload").on("change", function() {
        //Get count of selected files
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath
            .substring(imgPath.lastIndexOf(".") + 1)
            .toLowerCase();
        var image_holder = $("#image-holder");
        image_holder.empty();
        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof FileReader != "undefined") {
                //loop for each file selected for uploaded.
                for (var i = 0; i < countFiles; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $("<img />", {
                            src: e.target.result,
                            class: "img-fluid"
                        }).appendTo(image_holder);
                    };
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[i]);
                }
                $(".attach").addClass("uploaded");
            } else {
                alert("This browser does not support FileReader.");
            }
        } else {
            alert("Pls select only images");
        }
    });

    function addCoffee(thisParam) {
        var rate = thisParam.data("rate");
        for (var i = 1; i <= rate; i++) {
            $(".choose-coffe span[data-rate='" + i + "']").addClass("choosed");
        }
    }

    $(".choose-coffe span").mouseover(function() {
        addCoffee($(this));
    });

    $(".choose-coffe span").mouseleave(function() {
        var rate = $(this).data("rate");
        var click = $(".choose-coffe").attr("data-click");
        var i = click == "" ? 1 : parseInt(click);
        i = $(".choose-coffe.clicked").length == 0 ? i : i + 1;
        for (var i = i; i <= rate; i++) {
            $(".choose-coffe span[data-rate='" + i + "']").removeClass(
                "choosed"
            );
        }
    });
    $(".choose-coffe span").click(function() {
        addCoffee($(this));
        var rate = $(this).data("rate");
        $(".choose-coffe").addClass("clicked");
        $(".choose-coffe").attr("data-click", rate);
        var click = parseInt($(".choose-coffe").attr("data-click"));
        for (var i = click + 1; i <= 5; i++) {
            $(".choose-coffe span[data-rate='" + i + "']").removeClass(
                "choosed"
            );
        }
        $(".score-blue.comment").html(rate + ".0");
        $("#hiddenrate").val(rate);
    });

    $(".payment-option").change(function() {
        var thisVal = $(this).val();
        var price = $(this).data("price");
        var total = price;
        var min = price;
        if (thisVal == 50) {
            total = price / 2;
            min = price;
        }

        $("#total").val(formatRupiah(total));
        $("#min").val(formatRupiah(min));
    });

    function getTotal() {
        var nilai = parseInt($("#nilai").val());
        var price = parseInt($("#nilai").data("price"));

        var total = price * nilai;

        $("#total").html(formatRupiah(total));
        $("#pax").html(nilai);
    }

    getTotal();

    function formatRupiah(bilangan) {
        var reverse = bilangan
                .toString()
                .split("")
                .reverse()
                .join(""),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan
            .join(".")
            .split("")
            .reverse()
            .join("");

        return ribuan;
    }
});

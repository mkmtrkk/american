$(function () {
    // hamburgerメニュー
    $("#hamburger-btn").on("click", function () {
        $(this).toggleClass("on"); //class,cを小文字にしがち
        $("ul").toggleClass("hide");
    })
});
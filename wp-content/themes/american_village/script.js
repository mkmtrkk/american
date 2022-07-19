$(function () {
    // hamburgerメニュー
    $("#hamburger-btn").on("click", function () {
        $(this).toggleClass("on"); //class,cを小文字にしがち
        $("ul").toggleClass("hide");
    })

    let now_post_num = 6; // 現在表示されている件数
    let get_post_num = 6;  // もっと読み込むボタンで取得する件数

    //archive側で設定したdata属性の値を取得
    let load = $(".load");
    let post_type = load.data("post-type");
    let all_count = load.data("count"); //カスタム投稿の全件数

    //admin_ajaxにadmin-ajax.phpの絶対パス指定（相対パスは失敗する）
    let host_url = location.protocol + "//" + location.host;
    let admin_ajax = host_url + '/american/wp-admin/admin-ajax.php';

    $(document).on("click", ".more_btn", function () {
        //読み込み中はボタン非表示
        $('.more_btn').remove();

        //ajax処理。data{}のactionに指定した関数を実行、完了後はdoneに入る
        $.ajax({
            type: 'POST',
            url: admin_ajax,
            data: {
                'action' : 'my_ajax_action', //functions.phpで設定する関数名
                'now_post_num': now_post_num,
                'get_post_num': get_post_num,
                'post_type': post_type,
            },
        })
        .done(function(data){ //my_ajax_action関数で取得したデータがdataに入る
            //.loadにデータを追加
            load.append(data); 
            //表示件数を増やす
            now_post_num = now_post_num + get_post_num; 
            //まだ全件表示されていない場合、ボタンを再度表示
            if(all_count > now_post_num) { 
                load.after('<button class="more_btn">もっと読み込む</button>');
            }
        })
        .fail(function(){
            alert('エラーが発生しました');
        })
    });
});
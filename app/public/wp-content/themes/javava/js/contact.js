//お問い合わせフォームのアラート
$('#contact_form').submit(function(e) {
    //e.preventDefault(); // don't submit multiple times
    if (check()) {
        this.submit(); // use the native submit method of the form element
    }
    
});

function check() {
    let flag = 0;
    // 設定開始（必須にする項目を設定してください）
    if ($('#family_name').val() == "") { // 「氏」の入力をチェック
        flag = 1;
    }
    else if ($('#first_name').val() == "") { // 「名」の入力をチェック
        flag = 1;
    }
    else if ($('#company').val() == "") { // 「会社名」の入力をチェック
        flag = 1;
    }
    else if ($('#department').val() == "") { // 「所属部署名」の入力をチェック
        flag = 1;
    }
    else if ($('#e-mail').val() == "") { // 「メール」の入力をチェック
        flag = 1;
    }
    else if ($('#title').val() == "") { // 「題名」の入力をチェック
        flag = 1;
    }
    else if ($('#message').val() == "") { // 「本文」の入力をチェック
        flag = 1;
    }
    //e.preventDefault();
    // 設定終了
    if (flag) {
        window.alert('必須項目に未入力がありました'); // 入力漏れがあれば警告ダイアログを表示
        return false; // 送信を中止
    }
}

function remove() {
    $('.btn_submit_form').attr('disabled',false);
}
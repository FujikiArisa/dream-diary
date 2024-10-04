$(function () {
  $('.menu-btn').on('click', function () {
    $('.menu').toggleClass('is-active');
  });
  // ハンバーガーメニュー

  $("#question_btn").click(function () {
    $(".question div").toggleClass("show");
  });
  // クエスチョンボタン

  $("#overlap").hide();
  // オーバーラップを非表示

  $("#diaries li").click(function () {
    // タイトルとコンテンツを更新
    const pList = $(this).find("div:first-of-type p");
    const overlapPlist = $("#overlap").find(".diary div:first-of-type p")
    overlapPlist[0].innerText = pList[0].innerText
    overlapPlist[1].innerText = pList[1].innerText

    // 日付の更新
    const dateP = $(this).find("div:last-of-type p:first-of-type");
    const overlapDateP = $(this).find("div:last-of-type p:first-of-type");
    overlapDateP[0].innerText = dateP[0].innerText

    // リンクの更新
    const diaryId = $(this).data("diary-id")
    const _ = $("#overlap .edit-link")[0]
    $(_).attr("href", `/edit/${diaryId}`)

    $("#overlap").show();

    $(".delete-btn-2").click(function() {
      location.href = `delete/${diaryId}`;
    })
  });

  $("#overlap-close").click(() => {
    $("#overlap").hide();
    return false
  });
  // オーバーラップを閉じる

  $(".delete").hide();
  // 削除確認画面を非表示
  
  $(".delete-btn").click(function () {
    $(".delete").show();
    // return false
  });
  // 削除確認画面を表示
  
  $(".cancel").click(() => {
    $(".delete").hide();
    return false
  });
  // 削除確認画面を閉じる
}());
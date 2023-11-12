/* 全角を半角に自動変換 */
function half(str) {
    return str.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
        return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
    });
}
$(function() {
    $('.num-half').on('blur', function() {
        var str = $(this).val();
        $(this).val(half(str));
    });
});

/* 半角を全角に自動変換 */
function full(str) {
    return str.replace(/[A-Za-z0-9]/g, function(s) {
        return String.fromCharCode(s.charCodeAt(0) + 0xFEE0);
    });
}
$(function() {
    $('.num-full').on('blur', function() {
        var str = $(this).val();
        $(this).val(full(str));
    });
});

/* ひらがなをカタカナに変換 */
function kana(str) {
    return str.replace(/[ぁ-ん]/g, function(s) {
        return String.fromCharCode(s.charCodeAt(0) + 0x60);
    });
}
$(function() {
    $('.kana-change').on('blur', function() {
        var str = $(this).val();
        $(this).val(kana(str));
    });
});
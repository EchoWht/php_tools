$(document).ready(function() {
    $("#btnSubmit").on("click",function () {
        var filePaths=textValToArr($("#filePath").val());
        $.ajax({
            url: 'post.php',
            type: "POST",
            data: {
                "filePaths": filePaths,
                "copyFromClass":$("#copyFromClass").val(),
                "copyFromJsp":$("#copyFromJsp").val()
            },
            success: function (data) {
                //debugger;
                $("#jsonData").html(data);
            }
        });
    })
});

/**
 * 将换行的字符串转为数组
 * @param text
 * @returns {Array}
 */
function textValToArr(text) {
    var arr = text.split("\n");
    for(var i=0;i<arr.length;i++){
        arr[i]=removeAllSpace(arr[i]);
    }
    return arr;
}

/**
 * 去除字符串所有空格
 * @param str
 * @returns {void|XML|string}
 */
function removeAllSpace(str) {
    return str.replace(/\s+/g, "");
}
// $.ajax({
//     url : 'sysAttachController.do?getAttachNumByBusiId',
//     type: "POST",
//     data: {
//         "busiId": busiId
//     },
//     success: function(data){
//         //debugger;
//
//     }
// });
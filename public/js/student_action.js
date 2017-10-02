$(function () {
    $("#select-student-academy").change(function () {
        var acaId = $(this).val();
        getClassByAcademy(acaId, "select-student-class");
    });
});

function getClassByAcademy(acaId, selectId){
    if (!/^[a-zA-Z0-9]+$/.test(acaId))
        return false;
    $.get(
        "../controller/academy/get.class.by.academy.php?id=" + acaId,
        {},
        function (respond) {
            if (respond.hasOwnProperty("success") &&
                    respond.hasOwnProperty('data')){
                updateListOfClass(respond.data, selectId);
            } else {
                updateListOfClass([], selectId);
            }
        },
        'json'
    );
}

function updateListOfClass(listClasses, selectId){
    var htmlContent = '<option value="">-- Chọn theo lớp --</option>';
    $.each(listClasses, function (i, cls) {
        htmlContent += "<option value='" + cls.classId + "'>" + cls.className + "</option>";
    });
    $("#" + selectId).html(htmlContent);
}
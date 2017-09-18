$(function () {
    $("#select-student-academy").change(function () {
        var acaId = $(this).val();
        getClassByAcademy(acaId);
    });
});

function getClassByAcademy(acaId){
    if (!/^[a-zA-Z0-9]+$/.test(acaId))
        return false;
    $.get(
        baseUrl + "/controller/academy/get.class.by.academy.php?id=" + acaId,
        {},
        function (respond) {
            if (respond.hasOwnProperty("success") &&
                    respond.hasOwnProperty('data')){
                updateListOfClass(respond.data);
            } else {
                updateListOfClass([]);
            }
        },
        'json'
    );
}

function updateListOfClass(listClasses){
    var htmlContent = '<option>-- Chọn theo lớp --</option>';
    $.each(listClasses, function (i, cls) {
        htmlContent += "<option value='" + cls.classId + "'>" + cls.className + "</option>";
    });
    $('#select-student-class').html(htmlContent);
}
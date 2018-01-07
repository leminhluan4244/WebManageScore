var currentProvIdx = 0;
var provisionRef = [];
$(function () {
    generateNavigationButton();
    $('#copy-from-student-score').click(copyFromStudentScore);
    // $('#table-score').DataTable();
    $('[data-toggle="tooltip"]').tooltip();

    $("#btn-export").click(function(e) {
        e.preventDefault();
        exportToExcel();
    });
});

function generateNavigationButton(){
    var provisions = $('.section-1');
    $.each(provisions, function (i, provision) {
        if (provision.id !== "")
            provisionRef[i] = provision.id;
    });
    $('#prev').attr('href', '#' + provisionRef[currentProvIdx]);
    $('#next').attr('href', '#' + provisionRef[currentProvIdx]);
    $('#prev').click(function () {
        if (currentProvIdx > 0)
            currentProvIdx--;
        $(this).attr('href', '#' + provisionRef[currentProvIdx]);
    });
    $('#next').click(function () {
        if (currentProvIdx < provisionRef.length - 1)
            currentProvIdx++;
        $(this).attr('href', '#' + provisionRef[currentProvIdx]);
    });
}

function copyFromStudentScore() {
    var provisionScores = $('.std-score');
    $.each(provisionScores, function (i, provisionScore) {
        var score = $(provisionScore).text();
        var prName = $(provisionScore).data('name');
        $('[name="' + prName + '"]').val(score);
    });
    return false;
}

function exportToExcel(){
    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table-score-wrapper');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'exported_table_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
}
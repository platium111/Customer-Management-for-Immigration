$(document).ready(function () {
    //EXP- khong dung id vi duplicate se khong nhan dung gia tri
    // - neu gia tri sai -> debug can than o set gia tri cho bien, ca 2 dung tang 1 luc
    var countDoc = 0;
    var countDoc_edit = 0;
    $("#btnDeleteDocument").hide();
    $("#btnAddDocument").click(function () {
        $("#btnDeleteDocument").show();
        var temp = countDoc + 1;
        var inputDoc = '<input name="documents' + temp + '"' + 'type="text" class="form-control" placeholder="Document"> ';
        var selectTypeOfDoc = '<select name = "typeOfScan' + temp + '"' + 'class="form-control" > <option value="scan">Scan</option> <option value="original">Original</option>';
        $(".documentContain:last").after('<div class="row documentContain">' + inputDoc + selectTypeOfDoc + '</div>');
        countDoc++;
    });

    $("#btnDeleteDocument").click(function () {
        if (countDoc > 0) {
            $(".documentContain:last").remove();
            countDoc--;
        }
    });

    $("#btnAddDocument_edit").click(function () {
        countDoc_edit = $('.documentContain').length;
        var temp = countDoc_edit;
        var inputDoc = '<input name="documents' + temp + '"' + ' type="text" class="form-control" placeholder="Document"> ';
        var selectTypeOfDoc = '<select name = "typeOfScan' + temp + '"' + ' class="form-control" > <option value="scan">Scan</option> <option value="original">Original</option>';
        // 0 - mean none documentContain -> phai dung prepend noi vao ; 1-mean add documentContain after last
        if (countDoc_edit == 0) {
            var colDiv = $('form').children('.form-group').eq(14).children('.row').eq(0).children('div').eq(0);
            colDiv.prepend('<div class="row documentContain">' + inputDoc + selectTypeOfDoc + '</div>');
        } else {
            $(".documentContain:last").after('<div class="row documentContain">' + inputDoc + selectTypeOfDoc + '</div>');
            countDoc_edit++;
        }

    });

    $("#btnDeleteDocument_edit").click(function () {
        $(".documentContain:last").remove();
        countDoc_edit--;
    });

    $('a#clickView').click(function () {
        $('#myViewModal').modal({show: true});
        $.ajax({
            type: "POST",
            url: "http://localhost:8888/ci/" + "index.php/documentController/getDocumentsByReqId/" + $('#requirementId').html(),
            dataType: 'json',
            success: function (res) {
                if (res) {
                    var allList = "";
                    for (var i = 0; i < res.length; i++) {
                        docList = "<p>" + res[i].name + "| " + res[i].type + "</p>"
                        allList += docList;

                    }
                    jQuery(".modal-body").html(allList);
                }
            }

        });
    });

    $("#dob").datepicker({
        changeMonth: true,
        changeYear: true
    });

    $("#returnDate").datepicker({
        changeMonth: true,
        changeYear: true
    });
});

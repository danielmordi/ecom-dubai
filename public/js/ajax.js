// Categories
$(document).ready(function () {

    // Add
    $('#addCategory').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        let formData = {
            category: $('input[name="category"]').val(),
        };

        let type = 'POST';
        let url = 'category/add/';

        $.ajax({
            type: type,
            url: url,
            data: formData,
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#categoryMsg").addClass('text-success');
                $("#categoryMsg").html(response.success);
                setTimeout(function() {
                    $("#success").hide().html('');
                    location.reload();
                }, 5000);
            },
            error: function (response) {
                console.log(JSON.parse(response.responseText).errors.category);
                $("#categoryMsg").addClass('text-danger');
                $("#categoryMsg").html(JSON.parse(response.responseText).errors.category);
            }
        });
    });

    // Edit
    $('#editCategory').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        let formData = {
            category: $('input[name="category"]').val(),
        };
        let href = $('#editAttr').attr('data-attr');
        let type = 'PATCH';

        $.ajax({
            type: type,
            url: href,
            data: formData,
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#editCategoryMsg").removeClass('text-danager');
                $("#editCategoryMsg").addClass('text-success');
                $("#editCategoryMsg").html(response.success);
                // setTimeout(function() {
                //     $("#success").hide().html('');
                //     location.reload();
                // }, 5000);
            },
            error: function (response) {
                console.log(JSON.parse(response.responseText).errors.category);
                $("#editCategoryMsg").addClass('text-danger');
                $("#editCategoryMsg").html(JSON.parse(response.responseText).errors.category);
            }
        });
    });
});

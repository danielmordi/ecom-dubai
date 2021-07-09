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
        let url = 'category/add';

        $.ajax({
            type: type,
            url: url,
            data: formData,
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#categoryMsg").addClass('text-success');
                $("#categoryMsg").html(response.success);
                setTimeout(function () {
                    $("#success").hide().html('');
                    location.reload();
                }, 1000);
            },
            error: function (response) {
                $("#categoryMsg").addClass('text-danger');
                $("#categoryMsg").html(JSON.parse(response.responseText).errors.category);
            }
        });
    });

    // contactInformation
    $('#contactInformation').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        let formData = {
            site_name: $('input[name="site_name"]').val(),
            location: $('input[name="location"]').val(),
            facebook: $('input[name="facebook"]').val(),
            instagram: $('input[name="instagram"]').val(),
            email: $('input[name="email"]').val(),
            whatsapp: $('input[name="whatsapp"]').val(),
        };
        let href = 'settings/update/contact-info';
        let type = 'POST';

        $.ajax({
            type: type,
            url: href,
            data: formData,
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#alert").removeClass('alert alert-danager');
                $("#alert").addClass('alert alert-success');
                $("#alert").html(response.success);
                // setTimeout(function() {
                //     $("#success").hide().html('');
                //     location.reload();
                // }, 5000);
            },
            error: function (response) {
                console.log(JSON.parse(response.responseText).errors.category);
                $("#alert").addClass('text-danger');
                $("#alert").html(JSON.parse(response.responseText).errors.category);
            }
        });
    });

    // Store Logo
    $('#storeLogo').click(function (e) {
        e.preventDefault();

        var CSRF_TOKEN = $('meta[name="_token"]').attr("content");
        var fd = new FormData();
        var files = $('#imgupload')[0].files;
        let href = 'settings/update/logo';
        let type = 'POST';

        // Check file selected or not
        if (files.length > 0) {
            fd.append('file',files[0]);
            fd.append('_token',CSRF_TOKEN);

            $.ajax({
                type: type,
                url: href,
                data: fd,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    // $("#OpenImgUpload").attr("src", "{{ asset('storage/logo/') }}" + response.filename);
                    // $(".preview img").show(); // Display image element
                    $("#alert-media").removeClass('alert alert-danager');
                    $("#alert-media").addClass('alert alert-success');
                    $("#alert-media").html(response.success);
                },
                error: function (response) {
                    console.log(JSON.parse(response.responseText).errors.category);
                    $("#alert-media").addClass('text-danger');
                    $("#alert-media").html(JSON.parse(response.responseText).errors.category);
                }
            });
        }
    });

    // hide upload
    $('#OpenImgUpload').click(function () { $('#imgupload').trigger('click'); });
});

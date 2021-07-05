function onCancel(e) {
    console.log("Cancel");
    var index = $(this).parents("li").data("index");
    $(this).parents("form").find(".upload").upload("abort", parseInt(index, 10));
}

function onCancelAll(e) {
    console.log("Cancel All");
    $(this).parents("form").find(".upload").upload("abort");
}

function onRemove(e) {
  console.log("Remove");
  var index = $(this).parents("li").data("index");
  $(this).parents("form").find(".upload").upload("remove", parseInt(index, 10));
}

function onBeforeSend(formData, file) {
    console.log("Before Send");
    formData.append("test_field", "test_value");
    // return (file.name.indexOf(".jpg") < -1) ? false : formData; // cancel all jpgs
    return formData;
}

function onQueued(e, files) {
    console.log("Queued");
    var html = '';
    for (var i = 0; i < files.length; i++) {
        // html += '<li data-index="' + files[i].index + '"><span class="content"><span class="file">' + files[i].name + '</span><span class="remove">Remove</span><span class="cancel">Cancel</span><span class="progress">Queued</span></span><span class="bar"></span></li>';
        html += '<li data-index="' + files[i].index + '"><span class="content"><span class="file">' + files[i].name + '</span><span class="cancel">Cancel</span><span class="progress">Queued</span></span><span class="bar"></span></li>';
    }

    $(this).parents("form").find(".filelist.queue")
        .append(html);
}

function onStart(e, files) {
    console.log("Start");
    $(this).parents("form").find(".filelist.queue")
        .addClass("started")
        .find("li")
        .find(".progress").text("Waiting");
}

function onComplete(e) {
    console.log("Complete");
    // All done!
}

function onFileStart(e, file) {
    console.log("File Start");
    $(this).parents("form").find(".filelist.queue")
        .find("li[data-index=" + file.index + "]")
        .find(".progress").text("0%");
}

function onFileProgress(e, file, percent) {
    console.log("File Progress");
    var $file = $(this).parents("form").find(".filelist.queue").find("li[data-index=" + file.index + "]");

    $file.find(".progress").text(percent + "%")
    $file.find(".bar").css("width", percent + "%");
}

function onFileComplete(e, file, response) {
    console.log("File Complete");
    var html = '<span class="remove">remove</span>';
    if (response.trim() === "" || response.toLowerCase().indexOf("error") > -1) {
        $(this).parents("form").find(".filelist.queue")
            .find("li[data-index=" + file.index + "]").addClass("error")
            .find(".progress").text(response.trim());
    } else {
        var $target = $(this).parents("form").find(".filelist.queue").find("li[data-index=" + file.index + "]");
        $target.find(".file").text(file.name);
        $target.find(".progress").remove();
        $target.find(".cancel").remove();
        $target.appendTo($(this).parents("form").find(".filelist.complete"));
    }
}

function onFileError(e, file, error) {
    console.log("File Error");
    $(this).parents("form").find(".filelist.queue")
        .find("li[data-index=" + file.index + "]").addClass("error")
        .find(".progress").text("Error: " + error);
}

function onFileRemove(e, file, error) {
    console.log("File Removed");
    $(this).parents("form").find(".filelist.queue")
        .find("li[data-index=" + file.index + "]").addClass("error")
        .find(".progress").text("Removed");
}

function onChunkStart(e, file) {
    console.log("Chunk Start");
}

function onChunkProgress(e, file, percent) {
    console.log("Chunk Progress");
}

function onChunkComplete(e, file, response) {
    console.log("Chunk Complete");
}

function onChunkError(e, file, error) {
    console.log("Chunk Error");
}

function onStart(e) {
    console.log("Start Upload");
    $(this).parents("form").find(".upload").upload("start");
}

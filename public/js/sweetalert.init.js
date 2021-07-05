document.querySelector(".sweet-confirm-category-delete").onclick = function() {
    swal({
        title: "Are you sure to delete ?",
        type: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it !!",
        closeOnConfirm: !1
    }, function() {
        swal("Deleted !!", "Hey, your imaginary file has been deleted !!", "success")
    })
}

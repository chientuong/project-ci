function blockButton(thisItem) {
    KTApp.progress(thisItem)
    thisItem.prop('disabled',true)
}

function unblockButton(thisItem) {
    KTApp.unprogress(thisItem)
    thisItem.prop('disabled',false)
}

function noti(msg, type = 'warning') {
    switch (type) {
        case "warning":
            toastr.warning(msg);
            break;

        case "success":
            toastr.success(msg);
            break;

        case "error":
            toastr.error(msg);
            break;

    }
}
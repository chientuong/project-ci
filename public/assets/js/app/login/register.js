"use strict";

// Class Definition
var KTRegisterPage = function () {

    var action = function () {
        $(document).on('click', '#submit_register', function (e) {
            e.preventDefault();
            let item = $(this)
            // blockButton(item)

            let form_data = $('#form_register').serialize()

            $.ajax({
                type: 'post',
                url: URL_REGISTER_AJAX,
                data: form_data,
                dataType: 'json',
                success: function (data) {

                }
            });

        })
    }

    // Public Functions
    return {
        // public functions
        init: function () {
            action()
        }
    };
}();

// Class Initialization
jQuery(document).ready(function () {
    KTRegisterPage.init();
});

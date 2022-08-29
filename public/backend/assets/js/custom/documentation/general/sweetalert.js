"use strict";
var KTGeneralSweetAlertDemos = {
    init: function () {
        document.getElementById("kt_docs_sweetalert_basic").addEventListener("click", (t => {
            t.preventDefault(), Swal.fire({
                text: "Here's a basic example of SweetAlert!",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {confirmButton: "btn btn-primary"}
            })
        })), document.getElementById("kt_docs_sweetalert_html").addEventListener("click", (t => {
            t.preventDefault(), Swal.fire({
                html: 'A SweetAlert content with <strong>bold text</strong>, <a href="#">links</a> or any of our available <span class="badge badge-primary">components</span>',
                icon: "info",
                buttonsStyling: !1,
                showCancelButton: !0,
                confirmButtonText: "Ok, got it!",
                cancelButtonText: "Nope, cancel it",
                customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-danger"}
            })
        })), (() => {
            const t = document.getElementById("kt_docs_sweetalert_state_info"),
                e = document.getElementById("kt_docs_sweetalert_state_warning"),
                n = document.getElementById("kt_docs_sweetalert_state_error"),
                o = document.getElementById("kt_docs_sweetalert_state_success"),
                s = document.getElementById("kt_docs_sweetalert_state_question");
            t.addEventListener("click", (t => {
                t.preventDefault(), Swal.fire({
                    text: "Here's an example of an info SweetAlert!",
                    icon: "info",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {confirmButton: "btn btn-info"}
                })
            })), e.addEventListener("click", (t => {
                t.preventDefault(), Swal.fire({
                    text: "Here's an example of a warning SweetAlert!",
                    icon: "warning",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {confirmButton: "btn btn-warning"}
                })
            })), n.addEventListener("click", (t => {
                t.preventDefault(), Swal.fire({
                    text: "Here's an example of an error SweetAlert!",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {confirmButton: "btn btn-danger"}
                })
            })), o.addEventListener("click", (t => {
                t.preventDefault(), Swal.fire({
                    text: "Here's an example of a success SweetAlert!",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {confirmButton: "btn btn-success"}
                })
            })), s.addEventListener("click", (t => {
                t.preventDefault(), Swal.fire({
                    text: "Here's an example of a question SweetAlert!",
                    icon: "question",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {confirmButton: "btn btn-primary"}
                })
            }))
        })()
    }
};
KTUtil.onDOMContentLoaded((function () {
    KTGeneralSweetAlertDemos.init()
}));

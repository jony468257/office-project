function saBasic(message) {
    Swal.fire({
        title: "Any fool can use a computer",
        confirmButtonClass: "btn btn-primary w-xs mt-2",
        buttonsStyling: !1,
        showCloseButton: !0
    });
}

function saTitle(message) {
    Swal.fire({
        title: "The Internet?",
        text: "That thing is still around?",
        icon: "question",
        confirmButtonClass: "btn btn-primary w-xs mt-2",
        buttonsStyling: !1,
        showCloseButton: !0
    });
}

function saSuccess(message, time) {
    Swal.fire({
        title: "Good job!",
        text: message,
        icon: "success",
        timer: time,
        timerProgressBar: !0,
    })
}

function saError(message) {
    Swal.fire({
        title: "Oops...",
        text: message,
        icon: "error",
        confirmButtonClass: "btn btn-primary w-xs mt-2",
        buttonsStyling: !1,
        showCloseButton: !0
    })
}

function saWarning(message_1, message_2, element) {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to " + message_2 + " this " + message_1 + " !",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        cancelButtonClass: "btn btn-danger w-xs mt-2",
        confirmButtonText: "Yes, " + message_2 + " it!",
        buttonsStyling: !1,
        showCloseButton: !0
    }).then(function (t) {
        t.value ? $(element).parent().find('[sa-form="delete"]').submit() : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
            title: "Cancelled",
            text: "The delete operation was cancelled",
            icon: "error",
            confirmButtonClass: "btn btn-primary mt-2",
            buttonsStyling: !1
        })
    })
}

function saWarningBulkDelete(element) {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to delete selected items !",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        cancelButtonClass: "btn btn-danger w-xs mt-2",
        confirmButtonText: "Yes delete all!",
        buttonsStyling: !1,
        showCloseButton: !0
    }).then(function (t) {
        t.value ? galleryBulkDelete(element) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
            title: "Cancelled",
            text: "The delete operation was cancelled",
            icon: "error",
            confirmButtonClass: "btn btn-primary mt-2",
            buttonsStyling: !1
        })
    })
}

function saLongContent(message) {
    Swal.fire({
        imageUrl: "https://placeholder.pics/svg/300x1500",
        imageHeight: 1500,
        imageAlt: "A tall image",
        confirmButtonClass: "btn btn-primary w-xs mt-2",
        buttonsStyling: !1,
        showCloseButton: !0
    })
}

function saWarning2(message) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        cancelButtonClass: "btn btn-danger w-xs mt-2",
        confirmButtonText: "Yes, delete it!",
        buttonsStyling: !1,
        showCloseButton: !0
    }).then(function (t) {
        t.value && Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success",
            confirmButtonClass: "btn btn-primary w-xs mt-2",
            buttonsStyling: !1
        })
    })
}

function saParams(main, item) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        cancelButtonClass: "btn btn-danger w-xs mt-2",
        buttonsStyling: !1,
        showCloseButton: !0
    }).then(function (t) {
        t.value ? $(main).slideUp(item) : ''
    })
}

function saImage(message) {
    Swal.fire({
        title: "Sweet!",
        text: "Modal with a custom image.",
        imageUrl: "assets/images/logo-sm.png",
        imageHeight: 40,
        confirmButtonClass: "btn btn-primary w-xs mt-2",
        buttonsStyling: !1,
        animation: !1,
        showCloseButton: !0
    })
}

function saClose(message) {
    var t;
    Swal.fire({
        title: "Auto close alert!",
        html: "I will close in <strong></strong> seconds.",
        timer: 2e3,
        timerProgressBar: !0,
        showCloseButton: !0,
        didOpen: function () {
            Swal.showLoading(), t = setInterval(function () {
                var t = Swal.getHtmlContainer();
                t && (t = t.querySelector("b")) && (t.textContent = Swal.getTimerLeft())
            }, 100)
        },
        onClose: function () {
            clearInterval(t)
        }
    }).then(function (t) {
        t.dismiss === Swal.DismissReason.timer && console.log("I was closed by the timer")
    })
}


function saSaved(message) {
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Your work has been saved",
        showConfirmButton: !1,
        timer: 1500,
        showCloseButton: !0
    })
}


function saSubmit() {
    Swal.fire({
        title: "Submit email to run ajax request",
        input: "email",
        showCancelButton: !0,
        confirmButtonText: "Submit",
        showLoaderOnConfirm: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2",
        cancelButtonClass: "btn btn-danger w-xs",
        buttonsStyling: !1,
        showCloseButton: !0,
        preConfirm: function (n) {
            return new Promise(function (t, e) {
                setTimeout(function () {
                    "taken@example.com" === n ? e("This email is already taken.") : t()
                }, 2e3)
            })
        },
        allowOutsideClick: !1
    }).then(function (t) {
        Swal.fire({
            icon: "success",
            title: "Ajax request finished!",
            confirmButtonClass: "btn btn-primary w-xs",
            buttonsStyling: !1,
            html: "Submitted email: " + t
        })
    })
}


function saVarify() {
    Swal.fire({
        html: '<div class="mt-3"><div class="avatar-lg mx-auto"><div class="avatar-title bg-light text-success display-5 rounded-circle"><i class="ri-mail-send-fill"></i></div></div><div class="mt-4 pt-2 fs-15"><h4 class="fs-20 fw-semibold">Verify Your Email</h4><p class="text-muted mb-0 mt-3 fs-13">We have sent you verification email <span class="fw-medium text-dark">example@abc.com</span>, <br/> Please check it.</p></div></div>',
        showCancelButton: !1,
        confirmButtonClass: "btn btn-primary mb-1",
        confirmButtonText: "Verify Email",
        buttonsStyling: !1,
        footer: '<p class="fs-14 text-muted mb-0">Didn\'t receive an email ? <a href="#" class="fw-semibold text-decoration-underline">Resend</a></p>',
        showCloseButton: !0
    })
}

function saNotification() {
    Swal.fire({
        html: '<div class="mt-3"><div class="avatar-lg mx-auto"><img src="" class="rounded-circle img-thumbnail" alt="thumbnail"></div><div class="mt-4 pt-2 fs-15"><h4 class="fs-18 fw-semibold">Welcome <span class="fw-semibold">Mike Mayer</span></h4><p class="text-muted mb-0 fs-13">You have <span class="fw-semibold text-success">2</span> Notifications</p></div></div>',
        showCancelButton: !1,
        confirmButtonClass: "btn btn-primary mb-1",
        confirmButtonText: 'Show Me <i class="ri-arrow-right-line ms-1 align-bottom"></i>',
        buttonsStyling: !1,
        showCloseButton: !0
    })
}

// $(window).on('popstate', function (event) {
//     swal.close()
// });
// $(window).on('pushstate', function (event) {
//     swal.close()
// });

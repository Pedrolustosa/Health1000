Array.from(document.getElementsByClassName("menu is-menu-main")).forEach(function(e) {
    Array.from(e.getElementsByClassName("has-dropdown-icon")).forEach(function(e) {
        e.addEventListener("click", function(e) {
            var t = e.currentTarget.getElementsByClassName("dropdown-icon")[0].getElementsByClassName("mdi")[0];
            e.currentTarget.parentNode.classList.toggle("is-active"), t.classList.toggle("mdi-plus"), t.classList.toggle("mdi-minus")
        })
    })
}), Array.from(document.getElementsByClassName("jb-aside-mobile-toggle")).forEach(function(e) {
    e.addEventListener("click", function(e) {
        var t = e.currentTarget.getElementsByClassName("icon")[0].getElementsByClassName("mdi")[0];
        document.documentElement.classList.toggle("has-aside-mobile-expanded"), t.classList.toggle("mdi-forwardburger"), t.classList.toggle("mdi-backburger")
    })
}), Array.from(document.getElementsByClassName("jb-navbar-menu-toggle")).forEach(function(e) {
    e.addEventListener("click", function(e) {
        var t = e.currentTarget.getElementsByClassName("icon")[0].getElementsByClassName("mdi")[0];
        document.getElementById(e.currentTarget.getAttribute("data-target")).classList.toggle("is-active"), t.classList.toggle("mdi-dots-vertical"), t.classList.toggle("mdi-close")
    })
}), Array.from(document.getElementsByClassName("jb-modal")).forEach(function(e) {
    e.addEventListener("click", function(e) {
        var t = e.currentTarget.getAttribute("data-target");
        document.getElementById(t).classList.add("is-active"), document.documentElement.classList.add("is-clipped")
    })
}), Array.from(document.getElementsByClassName("jb-modal-close")).forEach(function(e) { e.addEventListener("click", function(e) { e.currentTarget.closest(".modal").classList.remove("is-active"), document.documentElement.classList.remove("is-clipped") }) }), Array.from(document.getElementsByClassName("jb-notification-dismiss")).forEach(function(e) { e.addEventListener("click", function(e) { e.currentTarget.closest(".notification").classList.add("is-hidden") }) });
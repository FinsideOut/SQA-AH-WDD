document.addEventListener("DOMContentLoaded", () => {
    // console.log("Page Loaded");

    // adds navigation to all h1s with class "main-heading"
    document.querySelectorAll(".main-heading").forEach((element) => {
        element.addEventListener("click", () => {
            console.log("Clicked");
            window.location.href = "/0-Introduction/index.html";
        });
    });

    // when link clicked checks if page exists
    // if not sends to error-page.html
    document.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", (event) => {
            const href = link.getAttribute("href");

            // empty or placeholder
            if (!href || href === "#") {
                event.preventDefault();
                window.location.href = "/0-Introduction/error-page.html";
                return;
            }

            fetch(href, { method: "HEAD" })
                .then((response) => {
                    // status 200
                    if (response.ok) {
                        window.location.href = href;
                    } else {
                        // error 404
                        event.preventDefault();
                        window.location.href = "/0-Introduction/error-page.html";
                    }
                })
                .catch(() => {
                    event.preventDefault();
                    window.location.href = "/0-Introduction/error-page.html";
                });
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    // console.log("Page Loaded");

    // adds navigation to all h1s with class "main-heading"
    document.querySelectorAll(".main-heading").forEach((element) => {
        element.addEventListener("click", () => {
            console.log("Clicked");
            window.location.href = "../0-Introduction/index.html";
        });
    });

    // when link clicked checks if page exists
    // if not sends to error-page.html
    // document.querySelectorAll("a").forEach((link) => {
    //     link.addEventListener("click", (event) => {
    //         const href = link.getAttribute("href");

    //         // // empty or placeholder
    //         // if (!href || href === "#") {
    //         //     event.preventDefault();
    //         //     // window.location.href = "../0-Introduction/error-page.html";
    //         //     return;
    //         // }

    //         fetch(href, { method: "HEAD" })
    //             .then((response) => {
    //                 // status 200
    //                 if (response.ok) {
    //                     window.location.href = href;
    //                     // event.preventDefault();

    //                     // console.log("LINK GOOD");
    //                 } else {
    //                     // error 404
    //                     // event.preventDefault();
    //                     // console.log("LINK BAD");

    //                     // window.location.href = "../0-Introduction/error-page.html";
    //                 }
    //             })
    //             .catch(() => {
    //                 event.preventDefault();
    //                 // console.log("LINK BAD");

    //                 window.location.href = "../0-Introduction/error-page.html";
    //             });
    //     });
    // });
});

// Function to check if a URL is reachable
// async function checkLink(url) {
//     try {
//         const response = await fetch(url, { method: 'HEAD' });
//         return response.ok; // True if the status code is 2xx or 3xx
//     } catch (error) {
//         return false; // False if any error occurs
//     }
// }

// // Apply function to all links on the page
// async function validateLinks() {
//     const links = document.querySelectorAll('a'); // Select all anchor tags

//     for (let link of links) {
//         const href = link.href;
//         if (href) {
//             const isValid = await checkLink(href);

//             if (!isValid) {
//                 // Redirect to error page if the link doesn't work
//                 link.addEventListener('click', (event) => {
//                     event.preventDefault(); // Prevent default navigation
//                     window.location.href = 'error-page.html';
//                 });
//             }
//         }
//     }
// }

// // Run the validation function after DOM is fully loaded
// document.addEventListener('DOMContentLoaded', validateLinks);

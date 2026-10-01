// document.addEventListener("DOMContentLoaded", function() {
//     const splashScreen = document.getElementById('splash-screen');
//     const closeBtn = document.getElementById('close-btn');

//     closeBtn.addEventListener('click', function() {
//         splashScreen.style.display = 'none';
//     });
// });

// document.addEventListener("DOMContentLoaded", function () {
//     const splashScreen = document.getElementById("splash-screen");
//     const closeBtn = document.getElementById("close-btn");
//     const splashImage = document.getElementById("splash-image");
//     const splashLink = document.getElementById("splash-link");

//     let isSecondImage = false;

//     closeBtn.addEventListener("click", function () {
//         if (!isSecondImage) {
//             splashImage.src = "img/dps-agra-ticking.png";
//             splashImage.alt = "DPS Agra";


//             splashLink.href = "https://forms.edunexttechnologies.com/forms/dps-agra/";

//             isSecondImage = true;
//         } else {
//             splashScreen.style.display = "none";
//         }
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    const splashScreen = document.getElementById("splash-screen");
    const closeBtn = document.getElementById("close-btn");
    const splashContent = document.querySelector(".splash-content");

    let isSecondImage = true;

    // Get current date in DD/MM/YYYY format
    const today = new Date();
    const day = String(today.getDate()).padStart(2, "0");
    const month = String(today.getMonth() + 1).padStart(2, "0");
    const year = today.getFullYear();

    const currentDate = `${day}/${month}/${year}`;

    // Date-wise image mapping
    const tickingImages = {
        "26/08/2026": "dps-agra-ticking-13.png",
        "27/08/2026": "dps-agra-ticking-12.png",
        "28/08/2026": "dps-agra-ticking-11.png",
        "29/08/2026": "dps-agra-ticking-10.png",
        "30/08/2026": "dps-agra-ticking-9.png",
        "31/08/2026": "dps-agra-ticking-8.png",
        "01/09/2026": "dps-agra-ticking-7.png",
        "02/09/2026": "dps-agra-ticking-6.jpeg",
        "03/09/2026": "dps-agra-ticking-5.jpeg",
        "04/09/2026": "dps-agra-ticking-4.jpeg",
        "05/09/2026": "dps-agra-ticking-3.jpeg",
        "06/09/2026": "dps-agra-ticking-2.jpeg",
        "07/09/2026": "dps-agra-ticking-1.jpeg",
        "08/09/2026": "dps-agra-ticking-1.jpeg",
    };

    // Use today's image, or fallback image if date is not configured
    const tickingImage = tickingImages[currentDate];

    const cacheBuster = `${year}${month}${day}`;

    closeBtn.addEventListener("click", function () {

        if (!isSecondImage) {

            // Replace the 3-part banner with date-based image
            splashContent.innerHTML = `
                <a
                    href="https://forms.edunexttechnologies.com/forms/dps-agra/"
                    target="_blank"
                    class="ticking-link"
                    style="display:block; width:100%; height:auto;"
                >
                    <img
                        src="img/${tickingImage}?v=${cacheBuster}"
                        alt="DPS Agra"
                        style="display:block; width:100%; height:auto;"
                    >
                </a>

                <button id="close-btn" type="button">X</button>
            `;

            document.querySelector(".ticking-link").addEventListener("click", function () {
                window.dataLayer = window.dataLayer || [];

                window.dataLayer.push({
                    event: "time_is_ticking"
                });
            });

            // Get the newly created close button
            document.getElementById("close-btn").addEventListener("click", function () {
                splashScreen.style.display = "none";
            });

            isSecondImage = true;

        } else {
            splashScreen.style.display = "none";
        }
    });
});
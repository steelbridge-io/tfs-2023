document.addEventListener("DOMContentLoaded", function () {
    const catalogImages = document.querySelectorAll(".col-sign-up-catalog img"); // Catalog images
    const form = document.querySelector(".col-sign-up-form"); // Form element

    // Step 1: Sequentially fade in catalog images
    catalogImages.forEach((img, index) => {
        setTimeout(() => {
            img.style.opacity = 1; // Make the image visible
            img.style.transform = "translateY(0)"; // Move to original position
        }, index * 1000); // Delay increases for each image (1 second apart)
    });

    // Step 2: Fade in the form after all images have loaded
    const totalImagesDuration = catalogImages.length * 1000; // Total time for all images to load
    setTimeout(() => {
        form.style.opacity = 1; // Make form visible
        form.style.transform = "translateX(0)"; // Move to original position
    }, totalImagesDuration); // Start after all images have faded in
});
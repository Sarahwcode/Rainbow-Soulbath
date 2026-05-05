document.addEventListener('DOMContentLoaded', () => {
    
    // 1. GALLERY LOGIC
    const galleryBlocks = document.querySelectorAll('.gallery-block');

    galleryBlocks.forEach((block) => {
        // We find the container and items SPECIFIC to this block
        const container = block.querySelector('.testimonial-container');
        const items = block.querySelectorAll('.testimonial-item');
        const nextBtn = block.querySelector('.next-btn');
        const prevBtn = block.querySelector('.prev-btn');
        
        let currentIndex = 0;

        // If a block is missing buttons, don't run the script for it
        if (!nextBtn || !prevBtn || !container) return; 

        function updateGallery(index) {
            // This move calculation relies on the CSS 'flex: 0 0 100%'
            container.style.transform = `translateX(-${index * 100}%)`;
        }

        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            currentIndex++;
            // If we go past the last item, go back to 0
            if (currentIndex >= items.length) {
                currentIndex = 0;
            }
            updateGallery(currentIndex);
        });

        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            currentIndex--;
            // If we go before the first item, go to the last one
            if (currentIndex < 0) {
                currentIndex = items.length - 1;
            }
            updateGallery(currentIndex);
        });
    });

    // 2. FIRST IMAGE CLICK LOGIC
    const clickImage = document.getElementById("firstImage");
    if (clickImage) {
        clickImage.addEventListener("click", () => {
            // Added a border instead of background-color so you can see it clearly
            clickImage.style.border = "5px solid red";
            console.log("Image highlighted!");
        });
    }
});
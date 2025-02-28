function createProductSection(title, imageUrl, priceText) {
    const section = document.createElement("section");
    section.className = "container";

    section.innerHTML = `
        <div class="row text-center">
            <h3 class="col pb-3">${title}</h3>
        </div>
        <div class="row">
            <div class="col text-center">
                <img src="${imageUrl}" loading="lazy" class="img-thumbnail open-modal"
                     alt="${title}" style="cursor: pointer;"
                     data-bs-toggle="modal" data-bs-target="#imageModal"/>
            </div>
            <p class="col mainpar text-end">
                ${priceText}
            </p>
        </div>
    `;

    
    document.getElementById("products").appendChild(section);
}

document.addEventListener("DOMContentLoaded", function() {
    const backToTop = document.getElementById("backToTop");


    let lastScroll = 0;
    window.addEventListener("scroll", function () {

        const now = Date.now();
        if (now - lastScroll < 200) {
            lastScroll = now;
            return;
        }
        


        
        if (this.window.scrollY > 300) {
            backToTop.classList.remove("d-none");
        } else {
            backToTop.classList.add("d-none");
        }
    });

});

function scrollToTop() {
    window.scrollTo({top:0, behavior: "smooth"});
}


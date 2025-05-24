   // <div class="row mb-3">
        //             <div class="col-md-auto col-6 text-start">Gipszkarton:</div>
        //             <div class="col-md d-none d-md-block" style="border-bottom: 2px dotted #000;"></div>
        //             <div class="col-md-auto col-6 text-center text-md-end">5-7000 .-/ m2</div>
        // </div>

function createArlistaElement(szolgaltas, ar, scriptTag) {
    const arlistaElement = document.createElement("div");

    arlistaElement.className = 'row mb3 px-3 mx-0';
    arlistaElement.innerHTML = `
                        <div class="col-md-auto col-6 text-start">${szolgaltas}</div>
                        <div class="col-md d-none d-md-block"></div>
                        <div class="col-md-auto col-6 text-center text-md-end align-content-end">${ar}</div>
    `;

    scriptTag.parentNode.appendChild(arlistaElement, scriptTag.nextSibling);


}
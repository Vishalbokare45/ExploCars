document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    if (brand) {
        updateImagePaths(brand);
    }
});


function updateImagePaths(brand) {


   
    // Select all images that need to be updated
    const images = document.querySelectorAll('img[src^="Companies/"]');

    images.forEach(img => {
        // Replace the company name in the image path with the brand name
        const newSrc = img.src.replace(/Companies\/\w+/, `Companies/${brand}`);
        img.src = newSrc;
        // Display the image
        img.style.display = 'block'; // or 'inline-block' depending on your layout
        document.getElementById('carouselExampleIndicators').style.display = '';
    });


    
}

  
document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    if (brand) {
        fetch(`companies_details.json`)
            .then(response => response.json())
            .then(data => {
                const carousalData = data[brand]?.carousal; // Using optional chaining to handle undefined
                const navbarBrandElement = document.querySelector('.navbar-brand');
                if (navbarBrandElement) {
                    navbarBrandElement.textContent = brand;
                }

                // Update carousel items
                if (carousalData) {
                    updateCarouselItems(brand, carousalData);
                }

                // Update model buttons
                const modelsData = data[brand]?.models; // Using optional chaining to handle undefined
                if (modelsData) {
                    updateModelButtons(modelsData);
                }
            });
    }
});

function updateCarouselItems(brand, carousalData) {
    const carouselInner = document.querySelector('.carousel-inner');
    carouselInner.innerHTML = ''; // Clear existing carousel items

    carousalData.forEach((item, index) => {
        const carouselItem = document.createElement('div');
        carouselItem.classList.add('carousel-item');
        if (index === 0) {
            carouselItem.classList.add('active');
        }

        const img = document.createElement('img');
        img.classList.add('d-block');
        img.classList.add('w-100');
        img.src = `Companies/${brand}/carousal/c (${index + 1}).jpg`;
        img.alt = `Image ${index + 1}`;

        const caption = document.createElement('div');
        caption.classList.add('carousel-caption');
        caption.classList.add('d-none');
        caption.classList.add('d-md-block');

        const title = document.createElement('h5');
        title.textContent = item.title;

        const description = document.createElement('p');
        description.textContent = item.description;

        caption.appendChild(title);
        caption.appendChild(description);

        carouselItem.appendChild(img);
        carouselItem.appendChild(caption);

        carouselInner.appendChild(carouselItem);
    });
}

function updateModelButtons(modelsData) {
    const buttonElements = document.querySelectorAll('.buton');
    buttonElements.forEach((buttonElement, index) => {
        if (modelsData[index]) {
            buttonElement.textContent = modelsData[index];

            // Add event listener to each button
            buttonElement.addEventListener('click', function() {
                const model = modelsData[index];
                const brand = document.querySelector('.navbar-brand').textContent; // Get the brand from navbar
                // Redirect to car-specific-details.html with brand and model parameters
                window.location.href = `car-specific-details.html?brand=${encodeURIComponent(brand)}&model=${encodeURIComponent(model)}`;
            });
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    if (brand) {
        fetch(`companies_details.json`)
            .then(response => response.json())
            .then(data => {
                const carousalData = data[brand].carousal;
                const modelsData = data[brand].models;
                const overviewData = data[brand].overview;
                const highlightsData = data[brand].highlights;

                const navbarBrandElement = document.querySelector('.navbar-brand');
                if (navbarBrandElement) {
                    navbarBrandElement.textContent = brand;
                }
                
                if (carousalData) {
                    const carouselInner = document.querySelector('.carousel-inner');
                    carouselInner.innerHTML = ''; // Clear existing carousel items

                    carousalData.forEach((item, index) => {
                        const carouselItem = document.createElement('div');
                        carouselItem.classList.add('carousel-item');
                        if (index === 0) {
                            carouselItem.classList.add('active');
                        }

                        const img = document.createElement('img');
                        img.classList.add('d-block');
                        img.classList.add('w-100');
                        img.src = `Companies/${brand}/carousal/c (${index + 1}).jpg`;
                        img.alt = `Image ${index + 1}`;

                        const caption = document.createElement('div');
                        caption.classList.add('carousel-caption');
                        caption.classList.add('d-none');
                        caption.classList.add('d-md-block');

                        const title = document.createElement('h5');
                        title.textContent = item.title;

                        const description = document.createElement('p');
                        description.textContent = item.description;

                        caption.appendChild(title);
                        caption.appendChild(description);

                        carouselItem.appendChild(img);
                        carouselItem.appendChild(caption);

                        carouselInner.appendChild(carouselItem);
                    });
                }

                // const modelsData = data[brand].models;

                if (modelsData) {
                    const modelTitles = document.querySelectorAll('.card-title');

                    modelTitles.forEach((titleElement, index) => {
                        if (modelsData[index]) {
                            titleElement.textContent = modelsData[index];
                        }
                    });
                }

                const discoverData = data[brand].discover;

                if (discoverData) {
                    const discoverTitle = document.querySelector('.jumbotron h1');
                    const discoverDescription = document.querySelector('.jumbotron p');

                    discoverTitle.textContent = discoverData.title;
                    discoverDescription.textContent = discoverData.description;
                }
                
                if (modelsData) {
                    const buttonElements = document.querySelectorAll('.buton');

                    buttonElements.forEach((buttonElement, index) => {
                        if (modelsData[index]) {
                            buttonElement.textContent = modelsData[index];
                        }
                    });
                }

                if (overviewData) {
                    const overviewSection = document.querySelector('.hero .text-wrapper');
                    overviewSection.innerHTML = ''; // Clear existing content

                    const overviewTitle = document.createElement('h1');
                    overviewTitle.textContent = overviewData.title;

                    const overviewDescription = document.createElement('p');
                    overviewDescription.textContent = overviewData.description;

                    overviewSection.appendChild(overviewTitle);
                    overviewSection.appendChild(overviewDescription);
                }

                if (highlightsData) {
                    const highlightsSection = document.querySelectorAll('.hero')[1].querySelector('.text-wrapper');
                    highlightsSection.innerHTML = ''; // Clear existing content

                    const highlightsTitle = document.createElement('h1');
                    highlightsTitle.textContent = highlightsData.title;

                    const highlightsDescription = document.createElement('p');
                    highlightsDescription.textContent = highlightsData.description;

                    highlightsSection.appendChild(highlightsTitle);
                    highlightsSection.appendChild(highlightsDescription);
                }

                // const modelsData = data[brand].models;
                
                if (modelsData) {
                    const buttonElements = document.querySelectorAll('.buton');

                    buttonElements.forEach((buttonElement, index) => {
                        if (modelsData[index]) {
                            buttonElement.textContent = modelsData[index];

                            // Add event listener to each button
                            buttonElement.addEventListener('click', function() {
                                const model = modelsData[index];
                                // Redirect to car-specific-details.html with brand and model parameters
                                window.location.href = `car-specific-details.html?brand=${encodeURIComponent(brand)}&model=${encodeURIComponent(model)}`;
                            });
                        }
                    });
                }
            });
    }
});



// document.addEventListener('DOMContentLoaded', function() {
//     // Fetch the JSON data
//     fetch('companies_details.json')
//         .then(response => response.json())
//         .then(data => {
//             const brand = data.brand.name; // Extract the brand name
//             const models = data.models; // Extract the models
            
//             // Iterate over the models array
//             models.forEach(model => {
//                 // Create a link for each model
//                 const link = document.createElement('a');
//                 link.href = `car-specific-details.html?brand=${encodeURIComponent(brand)}&car=${encodeURIComponent(model)}`;
//                 link.textContent = model;
//                 link.classList.add('btn', 'btn-primary', 'mr-2', 'mb-2');
                
//                 // Append the link to the container (assuming you have a container with id "models-container")
//                 document.getElementById('models-container').appendChild(link);
//             });
//         });
// });


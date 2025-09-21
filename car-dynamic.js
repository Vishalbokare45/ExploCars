// document.addEventListener('DOMContentLoaded', function () {
//     const urlParams = new URLSearchParams(window.location.search);
//     const brand = urlParams.get('brand');
//     const model = urlParams.get('model');

//     if (brand && model) {
//         // Update images
//         const images = document.querySelectorAll('.gallery-image, .card-img');
//         images.forEach(img => {
//             // Replace the brand and model names in the image path
//             const imagePath = `All Cars Specific/${brand}/${model}/CarImages/${img.dataset.imageName}`;
//             img.src = imagePath;
//         });

//         // Update videos
//         const videos = document.querySelectorAll('.video-container video');
//         videos.forEach(video => {
//             // Replace the brand and model names in the video path
//             const videoPath = `All Cars Specific/${brand}/${model}/CarImages/${video.dataset.videoName}`;
//             video.src = videoPath;
//         });
//     }
// });


// document.addEventListener('DOMContentLoaded', function () {
//     const urlParams = new URLSearchParams(window.location.search);
//     const brand = urlParams.get('brand');
//     const model = urlParams.get('model');

//     if (brand && model) {
//         // Update images
//         const images = document.querySelectorAll('img');
//         images.forEach(img => {
//             // Replace the brand and model names in the image path
//             const originalSrc = img.src;
//             const splitPath = originalSrc.split('/');
//             const filename = splitPath[splitPath.length - 1];
//             const newPath = `All Cars Specific/${brand}/${model}/CarImages/${filename}`;
//             img.src = newPath;
//         });

//         // Update videos
//         const videos = document.querySelectorAll('video');
//         videos.forEach(video => {
//             // Replace the brand and model names in the video path
//             const originalSrc = video.src;
//             const splitPath = originalSrc.split('/');
//             const filename = splitPath[splitPath.length - 1];
//             const newPath = `All Cars Specific/${brand}/${model}/CarImages/${filename}`;
//             console.log("New Video Path:", newPath); // Log the new path for debugging
//             video.src = newPath;
//         });
//     }
// });


// document.addEventListener('DOMContentLoaded', function () {
//     setTimeout(function() {
//         const urlParams = new URLSearchParams(window.location.search);
//         const brand = urlParams.get('brand');
//         const model = urlParams.get('model');

//         if (brand && model) {
//             // Update images
//             const images = document.querySelectorAll('img');
//             images.forEach(img => {
//                 // Replace the brand and model names in the image path
//                 const originalSrc = img.src;
//                 const splitPath = originalSrc.split('/');
//                 const filename = splitPath[splitPath.length - 1];
//                 const newPath = `All Cars Specific/${brand}/${model}/CarImages/${filename}`;
//                 img.src = newPath;
//             });

//             // Update videos
//             const videos = document.querySelectorAll('video');
//             videos.forEach(video => {
//                 // Replace the brand and model names in the video path
//                 const originalSrc = video.querySelector('source').src;
//                 const splitPath = originalSrc.split('/');
//                 const filename = splitPath[splitPath.length - 1];
//                 const newPath = `All Cars Specific/${brand}/${model}/CarImages/${filename}`;
//                 console.log("New Video Path:", newPath); // Log the new path for debugging
//                 video.querySelector('source').src = newPath;
//                 video.load(); // Reload the video source
//             });

//             const swiperImages = document.querySelectorAll('.swiper-container img');
//             swiperImages.forEach(img => {
//                 // Replace the brand and model names in the image path
//                 const originalSrc = img.src;
//                 const splitPath = originalSrc.split('/');
//                 const filename = splitPath[splitPath.length - 1];
//                 const newPath = `All Cars Specific/${brand}/${model}/ColorImages/Black/${filename}`;
//                 img.src = newPath;
//             });
//         }
//     }, 100);
// });


document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function() {
        const urlParams = new URLSearchParams(window.location.search);
        const brand = urlParams.get('brand');
        const model = urlParams.get('model');

        if (brand && model) {
            console.log("Brand:", brand); // Log the brand for debugging
            console.log("Model:", model); // Log the model for debugging

            // Update images
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                // Replace the brand and model names in the image path
                const originalSrc = img.src;
                const splitPath = originalSrc.split('/');
                const filename = splitPath[splitPath.length - 1];
                const newPath = `All Cars Specific/${brand}/${model}/CarImages/${filename}`;
                console.log("New Image Path:", newPath); // Log the new path for debugging
                img.src = newPath;
            });

            // Update videos
            const videos = document.querySelectorAll('video');
            videos.forEach(video => {
                // Replace the brand and model names in the video path
                const originalSrc = video.querySelector('source').src;
                const splitPath = originalSrc.split('/');
                const filename = splitPath[splitPath.length - 1];
                const newPath = `All Cars Specific/${brand}/${model}/CarImages/${filename}`;
                console.log("New Video Path:", newPath); // Log the new path for debugging
                video.querySelector('source').src = newPath;
                video.load(); // Reload the video source
            });

            const swiperImages = document.querySelectorAll('.swiper-container img');
            swiperImages.forEach(img => {
                // Replace the brand and model names in the image path
                const originalSrc = img.src;
                const splitPath = originalSrc.split('/');
                const filename = splitPath[splitPath.length - 1];
                const newPath = `All Cars Specific/${brand}/${model}/ColorImages/Black/${filename}`;
                console.log("New Swiper Image Path:", newPath); // Log the new path for debugging
                img.src = newPath;
            });
        }
    }, 100);
});


// document.addEventListener('DOMContentLoaded', function () {
//     const urlParams = new URLSearchParams(window.location.search);
//     const brand = urlParams.get('brand');
//     const model = urlParams.get('model');

//     if (brand && model) {
//         fetch('cars.json')
//             .then(response => response.json())
//             .then(data => {
//                 const carData = data[brand][model];
//                 if (carData) {
//                     // Fetch and display text for each video
//                     const videos = document.querySelectorAll('video');
//                     videos.forEach((video, index) => {
//                         const videoName = `video${index + 1}`;
//                         const videoData = carData[videoName];
//                         if (videoData) {
//                             const title = videoData.title;
//                             const description = videoData.description;
//                             const videoOverlay = video.parentElement.querySelector('.video-overlay');
//                             videoOverlay.querySelector('h5').textContent = title;
//                             videoOverlay.querySelector('p').textContent = description;
//                         }
//                     });

//                     // Fetch and display text for video3
//                     const video3Data = carData["video3"];
//                     if (video3Data) {
//                         const video3Title = video3Data.title;
//                         const video3Description = video3Data.description;
//                         const video3Section = document.querySelector('.video-container + .video-overlay');
//                         video3Section.querySelector('h5').textContent = video3Title;
//                         video3Section.querySelector('p').textContent = video3Description;
//                     }

//                     // Fetch and display text for bottom section
//                     const bottomData = carData["bottom"];
//                     if (bottomData) {
//                         const bottomTitle = bottomData.title;
//                         const bottomDescription = bottomData.description;
//                         const bottomSection = document.querySelectorAll('.container.my-5.col-lg-10')[1];
//                         bottomSection.querySelector('h3').textContent = bottomTitle;
//                         bottomSection.querySelector('p').textContent = bottomDescription;
//                     }
//                 }
//             })
//             .catch(error => console.error('Error fetching car data:', error));
//     }
// });


document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    const model = urlParams.get('model');

    if (brand && model) {
        fetch('cars.json')
            .then(response => response.json())
            .then(data => {
                const carData = data[brand][model];
                if (carData) {
                    // Fetch and display text for video1 and video2
                    const videos = document.querySelectorAll('video');
                    videos.forEach((video, index) => {
                        const videoName = `video${index + 1}`;
                        const videoData = carData[videoName];
                        if (videoData) {
                            const title = videoData.title;
                            const description = videoData.description;
                            const videoOverlay = video.parentElement.querySelector('.video-overlay');
                            videoOverlay.querySelector('h5').textContent = title;
                            videoOverlay.querySelector('p').textContent = description;
                        }
                    });

                   
                }
            })
            .catch(error => console.error('Error fetching car data:', error));
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    const model = urlParams.get('model');

    if (brand && model) {
        fetch('cars.json')
            .then(response => response.json())
            .then(data => {
                const carData = data[brand][model];
                if (carData) {
                    const mainCardData = carData["mainCard"];
                    if (mainCardData) {
                        const title = mainCardData.title;
                        const price = mainCardData.price;
                        const technicalSpecifications = mainCardData.technicalSpecifications;

                        document.querySelector('.card-title').textContent = title;
                        document.querySelector('.card-text').textContent = price;

                        const powerElem = document.querySelector('#power');
                        powerElem.querySelector('p').textContent = technicalSpecifications.power;

                        const accelerationElem = document.querySelector('#acceleration');
                        accelerationElem.querySelector('p').textContent = technicalSpecifications.acceleration;

                        const topSpeedElem = document.querySelector('#top-speed');
                        topSpeedElem.querySelector('p').textContent = technicalSpecifications.topSpeed;
                    }
                      // Fetch and display text for video3
                      const video3Data = carData["video3"];
                      if (video3Data) {
                          const video3Title = video3Data.title;
                          const video3Description = video3Data.description;
                          document.getElementById('video3Title').textContent = video3Title;
                          document.getElementById('video3Description').textContent = video3Description;
                      }
                    
                    const mainSectionData = carData["interior"];
                    if (mainSectionData) {
                        const mainSectionTitle = mainSectionData.title;
                        const mainSectionDescription = mainSectionData.description;
                        document.querySelector('main h2').textContent = mainSectionTitle;
                        document.querySelector('main p').textContent = mainSectionDescription;
                    }

                    // Fetch and display text for bottom section
                    const bottomData = carData["bottom"];
                    if (bottomData) {
                        const bottomTitle = bottomData.title;
                        const bottomDescription = bottomData.description;
                        document.getElementById('bottomTitle').textContent = bottomTitle;
                        document.getElementById('bottomDescription').textContent = bottomDescription;
                    }
                }
            })
            .catch(error => console.error('Error fetching car data:', error));
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    const model = urlParams.get('model');

    if (brand && model) {
        fetch('cars.json')
            .then(response => response.json())
            .then(data => {
                const carData = data[brand][model];
                if (carData) {
                    // Fetch and display text for video3
                    const video3Data = carData["video3"];
                    if (video3Data) {
                        const video3Title = video3Data.title;
                        const video3Description = video3Data.description;
                        document.getElementById('video3Title').textContent = video3Title;
                        document.getElementById('video3Description').textContent = video3Description;
                    }
                }
            })
            .catch(error => console.error('Error fetching car data:', error));
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    const model = urlParams.get('model');

    if (brand && model) {
        fetch('cars.json')
            .then(response => response.json())
            .then(data => {
                const carData = data[brand][model];
                if (carData) {
                    // Fetch and display data for interior
                    const interiorData = carData["interior"];
                    if (interiorData) {
                        const interiorTitle = interiorData.title;
                        const interiorDescription = interiorData.description;
                        document.querySelector('main h2').textContent = interiorTitle;
                        document.querySelector('main p').textContent = interiorDescription;
                    }
                }
            })
            .catch(error => console.error('Error fetching car data:', error));
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    const model = urlParams.get('model');

    if (brand && model) {
        fetch('cars.json')
            .then(response => response.json())
            .then(data => {
                const carData = data[brand][model];
                if (carData) {
                    // Fetch and display data for the bottom section
                    const bottomData = carData["bottom"];
                    if (bottomData) {
                        const bottomTitle = bottomData.title;
                        const bottomDescription = bottomData.description;
                        document.getElementById('bottomTitle').textContent = bottomTitle;
                        document.getElementById('bDescription').textContent = bottomDescription;
                    }
                }
            })
            .catch(error => console.error('Error fetching car data:', error));
    }
});


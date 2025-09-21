document.addEventListener('DOMContentLoaded', function () {
    // Variable to store the modal instance
    var modalInstance = null;

    // Function to close the modal and uncheck selected checkboxes
    function closeModal() {
        if (modalInstance) {
            modalInstance.hide();
            // Uncheck all checkboxes
            const checkboxes = document.querySelectorAll('.car-checkbox');
            checkboxes.forEach(checkbox => checkbox.checked = false);
        }
    }

    // Fetch the JSON data
    let carData = [];
    fetch('cars_temp.json')
        .then(response => response.json())
        .then(data => {
            carData = data;
        })
        .catch(error => console.error('Error fetching car data:', error));

    // Event listener for the modal's shown.bs.modal event
    document.getElementById('infoModal').addEventListener('shown.bs.modal', function () {
        // Get the modal instance and store it in the variable
        modalInstance = bootstrap.Modal.getInstance(this);
    });

    document.getElementById('uncheckAllBtn').addEventListener('click', function () {
        const checkboxes = document.querySelectorAll('.car-checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = false);
    });

    // Add click event listener to the Compare button
    document.getElementById('compareBtn').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action

        // Collect all checked checkboxes
        const checkedCheckboxes = document.querySelectorAll('.car-checkbox:checked');
        const checkedCarIds = Array.from(checkedCheckboxes).map(checkbox => checkbox.value);

        // Check if more than two cars are selected
        if (checkedCarIds.length > 2) {
            alert("You can only compare up to two cars.");
            return; // Exit the function
        }

        // Fetch and display information for each checked car
        let modalBodyContent = '<div class="container-xxl">'; // Start the container
        checkedCarIds.forEach((carId, index) => {
            const carInfo = carData.find(car => car.id === carId);
            if (carInfo) {
                // For every second car, start a new row
                if (index % 2 === 0) {
                    modalBodyContent += '<div class="row">';
                }

                modalBodyContent += `
                    <div class="col-md-6">
                        <div> 
                            <img src="${carInfo.imageSrc}" alt="${carInfo.name}" class="img-fluid mx-auto" id="imgid1"><br>
                        </div> 

                        <h4>${carInfo.name}</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Power (Kw)</td>
                                    <td>${carInfo.powerKw}</td>
                                </tr>
                                <tr>
                                    <td>Horsepower</td>
                                    <td>${carInfo.horsepower}</td>
                                </tr>
                                <tr>
                                    <td>Top Speed</td>
                                    <td>${carInfo.topSpeed} km/h</td>
                                </tr>
                                <tr>
                                    <td>0-100 mph</td>
                                    <td>${carInfo.zeroToHundred} sec</td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td>${carInfo.weightKg} kg</td>
                                </tr>
                                <tr>
                                    <td>Height</td>
                                    <td>${carInfo.height} mm</td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td>${carInfo.length} mm</td>
                                </tr>
                                <tr>
                                    <td>Fuel Consumption</td>
                                    <td>${carInfo.fuelConsumption} L/100km</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                `;

                // For every second car, close the row
                if (index % 2 === 1 || index === checkedCarIds.length - 1) {
                    modalBodyContent += '</div>'; // Close the row
                }
            } else {
                console.error('Car information not found for ID:', carId);
            }
        });
        modalBodyContent += '</div>'; // Close the container

        // Update modal body with selected car information
        document.querySelector('#modalBody').innerHTML = modalBodyContent;

        // Show the modal
        $('#infoModal').modal('show');
    });

    // Event listener for the modal's hidden.bs.modal event
    document.getElementById('infoModal').addEventListener('hidden.bs.modal', function () {
        closeModal(); // Close the modal when it's hidden
    });

    // Additional code to ensure the modal closes when the close button is clicked
    document.querySelector('#close1').addEventListener('click', function () {
        closeModal();
    });

    // Function to filter cars and brands
    function filterCarsAndBrands(selectedBrand) {
        const cars = document.querySelectorAll('.car-card'); // Get all car cards
        const brands = document.querySelectorAll('.brand-div'); // Get all brand divs

        // Loop through each car card and brand div
        cars.forEach(car => {
            const brand = car.dataset.brand; // Get the brand of the car

            // Show or hide the card based on the selected brand
            if (selectedBrand === 'all' || brand === selectedBrand) {
                car.style.display = 'block'; // Show the card
            } else {
                car.style.display = 'none'; // Hide the card
            }
        });

        // Loop through each brand div
        brands.forEach(brandDiv => {
            const brand = brandDiv.dataset.brand; // Get the brand of the div

            // Show or hide the brand div based on the selected brand
            if (selectedBrand === 'all' || brand === selectedBrand) {
                brandDiv.style.display = 'block'; // Show the div
            } else {
                brandDiv.style.display = 'none'; // Hide the div
            }
        });
    }

    // Add event listener to brand buttons
    const brandButtons = document.querySelectorAll('.brand-button');
    brandButtons.forEach(button => {
        button.addEventListener('click', function () {
            const brand = this.dataset.brand; // Get the brand from the data attribute
            filterCarsAndBrands(brand); // Filter cars and brands
        });
    });


    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();
    });
});
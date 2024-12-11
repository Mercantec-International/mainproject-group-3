<?php
session_start();
$page = 'Project';
include_once('../includes/header.php');

?>
<div class="flex flex-wrap bg-purple-100 p-8">
    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative" style="background-image:url('https://orbitaltoday.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/09/isar-spectrum-rocket.jpg.webp')">
        <div class="absolute top-4 left-4 text-xl">
            <i class="fa fa-heart text-white hover:text-red-500 cursor-pointer"></i>
        </div>
    </div>

    <div class="bg-white w-full md:w-2/3">
        <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">
            <div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
                <div class="w-full lg:w-1/5 lg:border-r text-center md:text-left">
                    <h3>Project 1: ROCket</h3>
                    <p class="mb-0 mt-3 text-grey-dark text-sm italic">ROCket (Rocket Prototype)</p>
                    <hr class="w-1/4 md:ml-0 mt-4 border lg:hidden">
                </div>
                <!-- Details Description -->
                <div class="w-full lg:w-3/5 lg:px-3">
                    <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm">
                        <span class="font-semibold">The more detailed description:</span>
                    </p>
                    <ul class="list-disc pl-6 space-y-4 text-sm md:text-md mt-4">
                        <li>
                            <span class="font-semibold">Develop a working rocket prototype:</span> Design and assemble a small-scale rocket that can be launched safely. The rocket should be capable of reaching a target altitude and capturing essential data during its flight.
                        </li>
                        <li>
                            <span class="font-semibold">Implement live data streaming:</span> Integrate sensors in the rocket to capture real-time data. This data will be transmitted to a connected website for live display and analysis. The key metrics to be monitored include:
                        </li>
                        <ul class="list-disc pl-10 space-y-2 text-sm md:text-md mt-2">
                            <li>
                                <span class="font-semibold">Speed:</span> Measure the rocket’s velocity during launch, ascent, and descent phases to understand its acceleration and maximum speed.
                            </li>
                            <li>
                                <span class="font-semibold">Altitude:</span> Track the rocket’s height above ground level throughout its flight to assess the maximum altitude reached and its stability at different heights.
                            </li>
                            <li>
                                <span class="font-semibold">Humidity:</span> Record the atmospheric humidity levels as the rocket ascends, providing insights into atmospheric conditions at different altitudes.
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex flex-wrap bg-purple-100 p-8 md:flex-row-reverse">
    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative" style="background-image:url('https://requirements.com/Portals/0/EasyDNNnews/33/img-Missing-Requirements-Fotolia_83230289_XS.jpg')">
        <div class="absolute top-4 right-4 text-xl">
            <i class="fa fa-heart text-white hover:text-red-500 cursor-pointer"></i>
        </div>
    </div>
    <div class="bg-white w-full md:w-2/3">
        <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-mr-6 relative">
            <div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap items-center">
                <div class="w-full lg:w-1/5 lg:border-r text-center md:text-left">
                    <h3>The Requirements </h3>
                    <p class="mb-0 mt-3 text-grey-dark text-sm italic">For The Overall Project</p>
                    <hr class="w-1/4 md:ml-0 mt-4 border lg:hidden">
                </div>
                <!-- Checklist Container -->
                <div class="bg-white rounded-lg shadow-md p-8 grid grid-cols-[auto_auto] gap-x-8 gap-y-4">
                    <!-- Column 1: First 4 Items -->
                    <div class="flex flex-col space-y-4">
                        <!-- Checkbox 1 -->
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="01"
                                class="checkbox appearance-none w-4 h-4 border-2 border-gray-300 rounded-sm checked:bg-indigo-600 checked:border-indigo-600 transition-all duration-300" />
                            <label
                                for="01"
                                class="ml-2 text-gray-700 cursor-pointer transition-all duration-300 checked:line-through checked:text-gray-400">
                                Company name
                            </label>
                        </div>
                        <!-- Checkbox 2 -->
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="02"
                                class="checkbox appearance-none w-4 h-4 border-2 border-gray-300 rounded-sm checked:bg-indigo-600 checked:border-indigo-600 transition-all duration-300" />
                            <label
                                for="02"
                                class="ml-2 text-gray-700 cursor-pointer transition-all duration-300 checked:line-through checked:text-gray-400">
                                Logo
                            </label>
                        </div>
                        <!-- Checkbox 3 -->
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="03"
                                class="checkbox appearance-none w-4 h-4 border-2 border-gray-300 rounded-sm checked:bg-indigo-600 checked:border-indigo-600 transition-all duration-300" />
                            <label
                                for="03"
                                class="ml-2 text-gray-700 cursor-pointer transition-all duration-300 checked:line-through checked:text-gray-400">
                                Info about employees
                            </label>
                        </div>
                        <!-- Checkbox 4 -->
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="04"
                                class="checkbox appearance-none w-4 h-4 border-2 border-gray-300 rounded-sm checked:bg-indigo-600 checked:border-indigo-600 transition-all duration-300" />
                            <label
                                for="04"
                                class="ml-2 text-gray-700 cursor-pointer transition-all duration-300 checked:line-through checked:text-gray-400">
                                Info about your product(s)
                            </label>
                        </div>
                    </div>

                    <!-- Column 2: Remaining Items -->
                    <div class="grid grid-cols-1 gap-y-4">
                        <!-- Checkbox 5 -->
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="05"
                                class="checkbox appearance-none w-4 h-4 border-2 border-gray-300 rounded-sm checked:bg-indigo-600 checked:border-indigo-600 transition-all duration-300" />
                            <label
                                for="05"
                                class="ml-2 text-gray-700 cursor-pointer transition-all duration-300 checked:line-through checked:text-gray-400">
                                Measured data of your prototype
                            </label>
                        </div>
                        <!-- Checkbox 6 -->
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="07"
                                class="checkbox appearance-none w-4 h-4 border-2 border-gray-300 rounded-sm checked:bg-indigo-600 checked:border-indigo-600 transition-all duration-300" />
                            <label
                                for="07"
                                class="ml-2 text-gray-700 cursor-pointer transition-all duration-300 checked:line-through checked:text-gray-400">
                                Tested In NLL
                            </label>
                        </div>
                        <!-- Checkbox 7 -->
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="07"
                                class="checkbox appearance-none w-4 h-4 border-2 border-gray-300 rounded-sm checked:bg-indigo-600 checked:border-indigo-600 transition-all duration-300" />
                            <label
                                for="07"
                                class="ml-2 text-gray-700 cursor-pointer transition-all duration-300 checked:line-through checked:text-gray-400">
                                Tested In DKK
                            </label>
                        </div>
                        <!-- Checkbox 8 -->
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="06"
                                class="checkbox appearance-none w-4 h-4 border-2 border-gray-300 rounded-sm checked:bg-indigo-600 checked:border-indigo-600 transition-all duration-300" />
                            <label
                                for="06"
                                class="ml-2 text-gray-700 cursor-pointer transition-all duration-300 checked:line-through checked:text-gray-400">
                                Cross-Country Comparison
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-wrap bg-purple-100 p-8">
    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative" style="background-image:url('https://media.kasperskydaily.com/wp-content/uploads/sites/99/2020/01/12172714/36c3-open-source-hardware-dangers-featured.jpg')">
        <div class="absolute top-4 left-4 text-xl">
            <i class="fa fa-heart text-white hover:text-red-500 cursor-pointer"></i>
        </div>
    </div>
    <div class="bg-white w-full md:w-2/3">
        <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">
            <div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
                <div class="w-full lg:w-1/5 lg:border-r text-center md:text-left">
                    <h3>Hardware/Specs Description</h3>
                    <p class="mb-0 mt-3 text-grey-dark text-sm italic">Explanation</p>
                    <hr class="w-1/4 md:ml-0 mt-4 border lg:hidden">
                </div>
                <!-- Details Description -->
                <div class="w-full lg:w-3/5 lg:px-3">
                    <ul class="list-disc pl-6 space-y-4 text-sm md:text-md mt-4">
                        <li>
                            <span class="font-semibold">ESP32C3:</span> The esp32c3 is a powerful small wireless microcontroller. It's small size is a perfect fit for our rocket with the ability to send data to our webserver via the internet.
                        </li>
                        <li>
                            <span class="font-semibold">3.7v lithium battery:</span> Is used to charge the esp32c3 on the go. This battery is perfect because it can be charged by the esp32c3 itself.
                        </li>
                        <li>
                            <span class="font-semibold">Arduino UNO R4 WiFi:</span> Very nice lightweight board for operating the rocket prototype. This board is based on the esp32 series so it has the ability to connect to the internet wirelessly as well.
                        </li>
                        <li>
                            <span class="font-semibold">BME280:</span> This component is used to measure the temperature and the pressure. It operates under I2C.
                        </li>
                        <li>
                            <span class="font-semibold">MPU6050 (accelerometer):</span> Our most important component, this sensor is used to measure the X, Y, Z acceleration, the X, Y, Z gyro and the temperature of the sensor itself.
                        </li>
                        <li>
                            <span class="font-semibold">Arduino relay:</span> This blocks the flow of voltage to make sure the valve stays closed. This device can be controlled by sending a high or low signal via digitalwrite().
                        </li>
                        <li>
                            <span class="font-semibold">Rain bird 24V valve:</span> Used to release the build up pressure and launch the rocket. This valve can be controlled via electricity (24V) if the solenoid is fully closed.
                        </li>
                        <li>
                            <span class="font-semibold">Boost converter:</span> This arduino component is used to convert the voltage from our batteries to 24V which is required to open the valve and release the pressure.
                        </li>
                        <li>
                            <span class="font-semibold">Liquid Crystal Display:</span> Used to display the current pressure in the tank.
                        </li>
                        <li>
                            <span class="font-semibold">Battery compartment:</span> Can hold 4 batteries to supply our valve with 24V in combination with a boost converter making our rocket station portable.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Save checkbox states to localStorage
    function saveCheckboxState() {
        const checkboxes = document.querySelectorAll('.checkbox');
        checkboxes.forEach(checkbox => {
            localStorage.setItem(checkbox.id, checkbox.checked);
        });
    }

    // Load checkbox states from localStorage
    function loadCheckboxState() {
        const checkboxes = document.querySelectorAll('.checkbox');
        checkboxes.forEach(checkbox => {
            const savedState = localStorage.getItem(checkbox.id);
            checkbox.checked = savedState === 'true'; // Restore saved state
        });
    }

    // Add event listeners to save state on checkbox change
    document.querySelectorAll('.checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', saveCheckboxState);
    });

    // Load checkbox state on page load
    window.addEventListener('DOMContentLoaded', loadCheckboxState);
</script>
<?php
include_once('../includes/footer.php');
?>
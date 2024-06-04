<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
	<div class="container mx-auto p-6" x-data="pricingList()">
    <div class="flex justify-center mb-6">
        <label class="mr-4">Number of weeks:</label>
        <input type="number" min="1" x-model.number="weeks" class="border rounded p-2 w-20 text-center">
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Bronze Plan</h2>
            <p class="text-xl mb-2">NGN <span x-text="bronzeCostPerWeek"></span> per week</p>
            <p class="text-gray-500 mb-4">Total: NGN <span x-text="totalBronze"></span></p>
            <button class="bg-blue-500 text-white py-2 px-4 rounded">Choose Bronze</button>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Silver Plan</h2>
            <p class="text-xl mb-2">NGN <span x-text="silverCostPerWeek"></span> per week</p>
            <p class="text-gray-500 mb-4">Total: NGN <span x-text="totalSilver"></span></p>
            <button class="bg-green-500 text-white py-2 px-4 rounded">Choose Silver</button>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Gold Plan</h2>
            <p class="text-xl mb-2">NGN <span x-text="goldCostPerWeek"></span> per week</p>
            <p class="text-gray-500 mb-4">Total: NGN <span x-text="totalGold"></span></p>
            <button class="bg-yellow-500 text-white py-2 px-4 rounded">Choose Gold</button>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Diamond Plan</h2>
            <p class="text-xl mb-2">NGN <span x-text="diamondCostPerWeek"></span> per week</p>
            <p class="text-gray-500 mb-4">Total: NGN <span x-text="totalDiamond"></span></p>
            <button class="bg-purple-500 text-white py-2 px-4 rounded">Choose Diamond</button>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Platinum Plan</h2>
            <p class="text-xl mb-2">NGN <span x-text="platinumCostPerWeek"></span> per week</p>
            <p class="text-gray-500 mb-4">Total: NGN <span x-text="totalPlatinum"></span></p>
            <button class="bg-indigo-500 text-white py-2 px-4 rounded">Choose Platinum</button>
        </div>
    </div>
</div>

<script>
function pricingList() {
    return {
        weeks: 1,
        bronzeCostPerWeek: 5000,
        silverCostPerWeek: 6000,
        goldCostPerWeek: 7000,
        diamondCostPerWeek: 8000,
        platinumCostPerWeek: 9000,
        get totalBronze() {
            return this.bronzeCostPerWeek * this.weeks;
        },
        get totalSilver() {
            return this.silverCostPerWeek * this.weeks;
        },
        get totalGold() {
            return this.goldCostPerWeek * this.weeks;
        },
        get totalDiamond() {
            return this.diamondCostPerWeek * this.weeks;
        },
        get totalPlatinum() {
            return this.platinumCostPerWeek * this.weeks;
        }
    }
}
</script>
</body>
</html>
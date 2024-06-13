<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Upload Asset</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif

    <form id="assetForm" action="{{ route('test.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="asset_name" class="block text-gray-700">Asset Name:</label>
            <input type="text" id="asset_name" name="asset_name" class="w-full border-gray-300 rounded-md" value="{{ old('asset_name') }}" required>
        </div>
        <div class="mb-4">
            <label for="asset_type" class="block text-gray-700">Asset Type:</label>
            <input type="text" id="asset_type" name="asset_type" class="w-full border-gray-300 rounded-md" value="{{ old('asset_type') }}" required>
        </div>

        <div class="mb-4">
            <label for="pictures" class="block text-gray-700">Pictures:</label>
            <input type="file" id="pictures" name="pictures[]" multiple>
        </div>
        <div class="mb-4">
            <label for="video" class="block text-gray-700">Video:</label>
            <input type="file" id="video" name="video">
        </div> 
        <div class="mb-4">
            <label for="asset_location_details" class="block text-gray-700">Asset Location Details:</label>
            <input type="text" id="asset_location_details" name="asset_location_details" class="w-full border-gray-300 rounded-md" value="{{ old('asset_location_details') }}">
        </div>
        <div class="mb-4">
            <label for="asset_information" class="block text-gray-700">Asset Information:</label>
            <input type="text" id="asset_information" name="asset_information" class="w-full border-gray-300 rounded-md" value="{{ old('asset_information') }}" required>
        </div>

        <div class="mb-4">
            <label for="technical_report" class="block text-gray-700">Technical Report:</label>
            <input type="text" id="technical_report" name="technical_report" class="w-full border-gray-300 rounded-md" value="{{ old('technical_report') }}" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700">Price:</label>
            <input type="number" step="0.01" id="price" name="price" class="w-full border-gray-300 rounded-md" value="{{ old('price') }}">
        </div>
        <div class="mb-4">
            <label for="coordinates" class="block text-gray-700">Coordinates:</label>
            <input type="text" id="coordinates" name="coordinates" class="w-full border-gray-300 rounded-md" value="{{ old('coordinates') }}">
        </div>
        <div class="mb-4">
            <label for="land_size" class="block text-gray-700">Land Size:</label>
            <input type="number" step="0.01" id="land_size" name="land_size" class="w-full border-gray-300 rounded-md" value="{{ old('land_size') }}">
        </div>

        <div class="mb-4">
            <label for="mineral_details" class="block text-gray-700">Mineral Details:</label>
            <input type="text" id="mineral_details" name="mineral_details" class="w-full border-gray-300 rounded-md" value="{{ old('mineral_details') }}" required>
        </div>

        <div class="mb-4">
            <label for="reserve_deposit" class="block text-gray-700">Reserve Deposit:</label>
            <input type="text" id="reserve_deposit" name="reserve_deposit" class="w-full border-gray-300 rounded-md" value="{{ old('reserve_deposit') }}" required>
        </div>

        
        <div class="mb-4">
            <label for="plan" class="block text-gray-700">Asset Plan:</label>
            <div class="flex flex-col">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="plan" value="Bronze" {{ old('plan') == 'Bronze' ? 'checked' : '' }}>
                    <span class="ml-2">Bronze</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="plan" value="Silver" {{ old('plan') == 'Silver' ? 'checked' : '' }}>
                    <span class="ml-2">Silver</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="plan" value="Gold" {{ old('plan') == 'Gold' ? 'checked' : '' }}>
                    <span class="ml-2">Gold</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="plan" value="Diamond" {{ old('plan') == 'Diamond' ? 'checked' : '' }}>
                    <span class="ml-2">Diamond</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="plan" value="Platinum" {{ old('plan') == 'Platinum' ? 'checked' : '' }}>
                    <span class="ml-2">Platinum</span>
                </label>
            </div>
        </div>

        <div class="mb-4">
            <label for="duration" class="block text-gray-700">Duration:</label>
            <input type="text" id="duration" name="duration" class="w-full border-gray-300 rounded-md" value="{{ old('duration') }}" required>
        </div>

        <div class="mb-4">
            <label for="duration" class="block text-gray-700">Contact Information:</label>
            <input type="text" id="contact_information" name="contact_information" class="w-full border-gray-300 rounded-md" value="{{ old('contact_information') }}" required>
        </div>

  


      

        
     

        
        <div class="mb-4">
            <label for="jorc_report" class="block text-gray-700">JORC REPORT:</label>
            <input type="text" id="jorc_report" name="jorc_report" class="w-full border-gray-300 rounded-md" value="{{ old('jorc_report') }}" required>
        </div>

        <div class="mb-4">
            <label for="opportunity_type" class="block text-gray-700">OPPORTUNITY TYPE:</label>
            <input type="text" id="opportunity_type" name="opportunity_type" class="w-full border-gray-300 rounded-md" value="{{ old('opportunity_type') }}" required>
        </div>

        

        <div class="mb-4">
            <label for="geological_location" class="block text-gray-700">GEOLOGICAL LOCATION:</label>
            <input type="text" id="geological_location" name="geological_location" class="w-full border-gray-300 rounded-md" value="{{ old('geological_location') }}" required>
        </div>

     
        
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload Asset</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('assetForm');

    // Load saved form data from local storage
    Object.keys(localStorage).forEach(key => {
        const input = document.querySelector(`#assetForm [name="${key}"]`);
        if (input) {
            if (input.type === 'radio') {
                input.checked = localStorage.getItem(key) === input.value;
            } else {
                input.value = localStorage.getItem(key);
            }
        }
    });

    // Save form data to local storage as user types
    form.addEventListener('input', function(event) {
        if (event.target.name) {
            if (event.target.type === 'radio' && event.target.checked) {
                localStorage.setItem(event.target.name, event.target.value);
            } else if (event.target.type !== 'radio') {
                localStorage.setItem(event.target.name, event.target.value);
            }
        }
    });

    // Clear local storage on successful form submission
    form.addEventListener('submit', function() {
        localStorage.clear();
    });
});
</script>

</body>
</html>
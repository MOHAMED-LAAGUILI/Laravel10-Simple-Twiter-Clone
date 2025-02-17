<!-- Success Message -->
@if (session('success'))
    <div id="success-alert" class="bg-green-600 text-white p-4 rounded-lg mb-4 flex justify-between items-center space-x-4 shadow-lg opacity-100 transform transition-all duration-500 ease-in-out">
        <div class="flex-1">
            <span>{{ session('success') }}</span>
        </div>
        <button onclick="document.getElementById('success-alert').classList.add('opacity-0'); setTimeout(function(){ document.getElementById('success-alert').remove(); }, 300);" class="text-white text-lg font-bold">
            &times;
        </button>
    </div>
@endif

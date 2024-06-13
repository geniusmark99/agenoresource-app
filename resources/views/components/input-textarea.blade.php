<div x-data="{totalCharsAllowed : 100, currentCharCount: 0, textAreaInput: ''}">
        <textarea id="mineral_details" name="mineral_details" rows="10"
    value="{{ old('mineral_details') }}"
        
        :maxlength="totalCharsAllowed" @keyup="currentCharCount = textAreaInput.length" x-model="textAreaInput" rows="4" 
        type="text" 
       class=' mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm' >
        >            </textarea>
</div>
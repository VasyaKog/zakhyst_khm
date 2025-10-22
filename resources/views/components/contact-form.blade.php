<!-- Contact Form Component -->
<div class="bg-white">
    <form id="contact-form" class="space-y-8" method="POST" action="{{ route('contact.submit') }}">
        @csrf
        
        <!-- Name Fields Row -->
        <div class="grid grid-cols-2 gap-8">
            <!-- First Name -->
            <div class="relative">
                <input type="text" 
                       id="first_name" 
                       name="first_name" 
                       data-placeholder="[ ІМ'Я* ]"
                       class="w-full h-[70px] bg-transparent text-[24px] font-bold font-['Montserrat'] text-black appearance-none focus:ring-0 focus:shadow-none"
                       style="border: none; border-bottom: 2px solid #BEBEBE; outline: none; box-shadow: none; padding: 22px 0 0 25px;"
                       required>
                <span class="absolute left-[25px] top-[22px] text-[24px] font-bold font-['Montserrat'] text-black uppercase pointer-events-none" id="placeholder_first_name">[ ІМ'Я<span class="text-veteran-blue">*</span> ]</span>
                @error('first_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="relative">
                <input type="text" 
                       id="last_name" 
                       name="last_name" 
                       placeholder="[ ПРІЗВИЩЕ ]"
                       class="w-full h-[70px] bg-transparent text-[24px] font-bold font-['Montserrat'] text-black appearance-none focus:ring-0 focus:shadow-none"
                       style="border: none; border-bottom: 2px solid #BEBEBE; outline: none; box-shadow: none; padding: 22px 0 0 25px;">
                @error('last_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Email/Subject Field -->
        <div class="relative">
            <input type="text" 
                   id="subject" 
                   name="subject" 
                   data-placeholder="[ тел / імейл* ]"
                   class="w-full h-[70px] bg-transparent text-[24px] font-bold font-['Montserrat'] text-black appearance-none focus:ring-0 focus:shadow-none"
                   style="border: none; border-bottom: 2px solid #BEBEBE; outline: none; box-shadow: none; padding: 22px 0 0 25px;"
                   required>
            <span class="absolute left-[25px] top-[22px] text-[24px] font-bold font-['Montserrat'] text-black uppercase pointer-events-none" id="placeholder_subject">[ ТЕЛ / ІМЕЙЛ<span class="text-veteran-blue">*</span> ]</span>
            @error('subject')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Message Field -->
        <div class="relative">
            <textarea id="message" 
                      name="message" 
                      data-placeholder="[ Твій запит* ]"
                      class="w-full h-[458px] bg-transparent text-2xl font-normal font-['Montserrat'] text-black leading-10 appearance-none focus:ring-0 focus:shadow-none"
                      style="border: none; border-bottom: 2px solid #BEBEBE; outline: none; resize: none; box-shadow: none; padding: 22px 0 0 25px;"
                      required></textarea>
            <span class="absolute left-[25px] top-[22px] text-[24px] font-bold font-['Montserrat'] text-black uppercase pointer-events-none" id="placeholder_message">[ ТВІЙ ЗАПИТ<span class="text-veteran-blue">*</span> ]</span>
            @error('message')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Required Fields Note and Submit Button -->
        <div class="flex items-center justify-between !mb-[50px]">
            <div class="flex items-center space-x-3">
                <span class="text-veteran-blue text-4xl font-normal font-['Montserrat'] pt-[15px]">*</span>
                <span class="text-black text-lg font-bold font-['Montserrat'] leading-6"> - Поля обов'язкові до заповнення</span>
            </div>

            <button 
                type="submit" 
                class="w-[260px] h-[70px] px-8 py-6 rounded-full border-2 border-veteran-blue bg-transparent text-black text-lg font-black font-['Montserrat'] uppercase leading-normal tracking-wide hover:bg-veteran-blue hover:text-white transition-colors duration-300 flex items-center justify-center">
                Надіслати
            </button>
        </div>
    </form>
</div>

<style>
/* Focus: force only underline color change, no outline/box shadows */
#first_name:focus,
#last_name:focus,
#subject:focus,
#message:focus {
    outline: none !important;
    box-shadow: none !important;
}

#first_name:focus { border-bottom-color: #3971E2; }
#last_name:focus { border-bottom-color: #3971E2; }
#subject:focus { border-bottom-color: #3971E2; }
#message:focus { border-bottom-color: #3971E2; }

/* Placeholder styling for regular placeholder */
#last_name::placeholder {
    color: #000000;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    
    // Handle custom placeholders with blue asterisks
    const fieldsWithCustomPlaceholder = [
        { input: document.getElementById('first_name'), placeholder: document.getElementById('placeholder_first_name') },
        { input: document.getElementById('subject'), placeholder: document.getElementById('placeholder_subject') },
        { input: document.getElementById('message'), placeholder: document.getElementById('placeholder_message') }
    ];
    
    fieldsWithCustomPlaceholder.forEach(({ input, placeholder }) => {
        // Hide placeholder when input has value or is focused
        function updatePlaceholder() {
            if (input.value || document.activeElement === input) {
                placeholder.style.display = 'none';
            } else {
                placeholder.style.display = 'block';
            }
        }
        
        input.addEventListener('focus', updatePlaceholder);
        input.addEventListener('blur', updatePlaceholder);
        input.addEventListener('input', updatePlaceholder);
        
        // Initial check
        updatePlaceholder();
    });
    
    // Form submission handling
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        const firstName = document.getElementById('first_name').value.trim();
        const message = document.getElementById('message').value.trim();
        
        if (!firstName || !message) {
            alert('Будь ласка, заповніть обов\'язкові поля (Ім\'я та Повідомлення)');
            return;
        }
        
        // Submit form
        const formData = new FormData(form);
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Дякуємо! Ваше повідомлення було успішно відправлено.');
                form.reset();
                // Reset custom placeholders
                fieldsWithCustomPlaceholder.forEach(({ placeholder }) => {
                    placeholder.style.display = 'block';
                });
            } else {
                alert('Виникла помилка при відправці повідомлення. Спробуйте ще раз.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Виникла помилка при відправці повідомлення. Спробуйте ще раз.');
        });
    });
});
</script>

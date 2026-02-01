<!-- Contact Form Component -->
<div class="bg-white dark:bg-zinc-900 transition-colors duration-300">
    <form id="contact-form" class="space-y-8" method="POST" action="{{ route('contact.submit') }}">
        @csrf

        <!-- Name Fields Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- First Name -->
            <div class="relative">
                <input type="text" id="first_name" name="first_name" data-placeholder="{{ __('Name Placeholder') }}"
                    class="w-full h-[60px] lg:h-[70px] bg-transparent text-[1.25rem] lg:text-[1.5rem] font-bold font-montserrat text-black dark:text-white appearance-none focus:ring-0 focus:shadow-none border-0 border-b-2 border-[#BEBEBE] dark:border-zinc-600 outline-none pt-[18px] lg:pt-[22px] pl-[20px] lg:pl-[25px] transition-colors"
                    required>
                <span
                    class="absolute left-[20px] lg:left-[25px] top-[18px] lg:top-[22px] text-[1.25rem] lg:text-[1.5rem] font-bold font-montserrat text-black dark:text-gray-400 uppercase pointer-events-none transition-colors"
                    id="placeholder_first_name">{{ __('Name Placeholder') }}</span>
                @error('first_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="relative">
                <input type="text" id="last_name" name="last_name" placeholder="{{ __('Surname Placeholder') }}"
                    class="w-full h-[60px] lg:h-[70px] bg-transparent text-[1.25rem] lg:text-[1.5rem] font-bold font-montserrat text-black dark:text-white appearance-none focus:ring-0 focus:shadow-none border-0 border-b-2 border-[#BEBEBE] dark:border-zinc-600 outline-none pt-[18px] lg:pt-[22px] pl-[20px] lg:pl-[25px] transition-colors">
                @error('last_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Email/Subject Field -->
        <div class="relative">
            <input type="text" id="subject" name="subject" data-placeholder="{{ __('Subject Placeholder') }}"
                class="w-full h-[60px] lg:h-[70px] bg-transparent text-[1.25rem] lg:text-[1.5rem] font-bold font-montserrat text-black dark:text-white appearance-none focus:ring-0 focus:shadow-none border-0 border-b-2 border-[#BEBEBE] dark:border-zinc-600 outline-none pt-[18px] lg:pt-[22px] pl-[20px] lg:pl-[25px] transition-colors"
                required>
            <span
                class="absolute left-[20px] lg:left-[25px] top-[18px] lg:top-[22px] text-[1.25rem] lg:text-[1.5rem] font-bold font-montserrat text-black dark:text-gray-400 uppercase pointer-events-none transition-colors"
                id="placeholder_subject">{{ __('Subject Placeholder') }}</span>
            @error('subject')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Message Field -->
        <div class="relative">
            <textarea id="message" name="message" data-placeholder="{{ __('Request Placeholder') }}"
                class="w-full h-[300px] lg:h-[458px] bg-transparent text-[1.25rem] lg:text-2xl font-normal font-montserrat text-black dark:text-white leading-10 appearance-none focus:ring-0 focus:shadow-none border-0 border-b-2 border-[#BEBEBE] dark:border-zinc-600 outline-none resize-none pt-[18px] lg:pt-[22px] pl-[20px] lg:pl-[25px] transition-colors"
                required></textarea>
            <span
                class="absolute left-[20px] lg:left-[25px] top-[18px] lg:top-[22px] text-[1.25rem] lg:text-[1.5rem] font-bold font-montserrat text-black dark:text-gray-400 uppercase pointer-events-none transition-colors"
                id="placeholder_message">{{ __('Request Placeholder') }}</span>
            @error('message')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Required Fields Note and Submit Button -->
        <div class="flex flex-col lg:flex-row items-center lg:justify-between !mb-[50px] space-y-8 lg:space-y-0">
            <div class="flex items-center space-x-3 w-full lg:w-auto justify-start">
                <span class="text-veteran-blue text-3xl lg:text-4xl font-normal font-montserrat pt-[15px]">*</span>
                <span
                    class="text-black dark:text-white text-base lg:text-lg font-bold font-montserrat leading-6 transition-colors">
                    {{ __('Required Fields Note') }}</span>
            </div>

            <button type="submit"
                class="w-full lg:w-[260px] h-[60px] lg:h-[70px] px-8 py-4 lg:py-6 rounded-full border-2 border-veteran-blue bg-transparent text-black dark:text-white text-lg font-black font-montserrat uppercase leading-normal tracking-wide hover:bg-veteran-blue hover:text-white transition-colors duration-300 flex items-center justify-center">
                {{ __('Send') }}
            </button>
        </div>
    </form>
</div>

<style>
    #first_name:focus,
    #last_name:focus,
    #subject:focus,
    #message:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    #first_name:focus {
        border-bottom-color: #3971E2;
    }

    #last_name:focus {
        border-bottom-color: #3971E2;
    }

    #subject:focus {
        border-bottom-color: #3971E2;
    }

    #message:focus {
        border-bottom-color: #3971E2;
    }

    /* Placeholder styling for regular placeholder */
    #last_name::placeholder {
        color: #000000;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
    }

    .dark #last_name::placeholder {
        color: #9CA3AF;
        /* gray-400 */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contact-form');

        // Handle custom placeholders with blue asterisks
        const fieldsWithCustomPlaceholder = [
            { input: document.getElementById('first_name'), placeholder: document.getElementById('placeholder_first_name') },
            { input: document.getElementById('subject'), placeholder: document.getElementById('placeholder_subject') },
            { input: document.getElementById('message'), placeholder: document.getElementById('placeholder_message') }
        ];

        fieldsWithCustomPlaceholder.forEach(({ input, placeholder }) => {
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

            updatePlaceholder();
        });

        // Form submission handling
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Basic validation
            const firstName = document.getElementById('first_name').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!firstName || !message) {
                alert('{{ __('Fill Required Fields') }}');
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
                        alert('{{ __('Form Success') }}');
                        form.reset();
                        // Reset custom placeholders
                        fieldsWithCustomPlaceholder.forEach(({ placeholder }) => {
                            placeholder.style.display = 'block';
                        });
                    } else {
                        alert('{{ __('Form Error') }}');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('{{ __('Form Error') }}');
                });
        });
    });
</script>
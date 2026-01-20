<!-- Toast Notification -->
<div id="contact-toast"
    class="fixed bottom-8 left-1/2 -translate-x-1/2 bg-veteran-blue text-white px-6 py-3 rounded-lg shadow-lg z-[60] opacity-0 transition-opacity duration-300 pointer-events-none">
    <p class="text-base font-bold font-['Montserrat'] m-0">{{ __('Message Sent') }}</p>
</div>

<!-- Contact Modal -->
<div id="contact-modal" class="fixed inset-0 bg-black bg-opacity-50 z-[70] hidden items-center justify-center p-4">
    <div
        class="bg-white dark:bg-zinc-900 w-[95%] sm:w-full sm:max-w-[776px] h-auto max-h-[90vh] overflow-y-auto rounded-none relative scrollbar-hide transition-colors">
        <!-- Close Button -->
        <button id="close-contact-modal"
            class="absolute top-6 right-6 z-10 w-8 h-8 flex items-center justify-center text-black dark:text-white hover:text-veteran-blue transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Modal Content -->
        <div class="pt-[60px] px-6 md:px-[70px] pb-8 h-full">
            <form id="contact-form" class="h-full flex flex-col space-y-6">
                <!-- Name and Surname Row -->
                <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8">
                    <!-- Name Field -->
                    <div class="flex-1 relative">
                        <input type="text" id="contact-name" name="name" required
                            class="w-full h-12 bg-transparent text-base md:text-xl font-bold font-['Montserrat'] leading-relaxed text-black dark:text-white appearance-none focus:ring-0 focus:shadow-none placeholder-shown:border-gray-400 dark:placeholder-shown:border-gray-600"
                            style="border: none; border-bottom: 1px solid #9CA3AF; outline: none; box-shadow: none;"
                            placeholder="{{ __('Name Placeholder') }}">
                    </div>

                    <!-- Surname Field -->
                    <div class="flex-1 relative">
                        <input type="text" id="contact-surname" name="surname"
                            class="w-full h-12 bg-transparent text-base md:text-xl font-bold font-['Montserrat'] leading-relaxed text-black dark:text-white appearance-none focus:ring-0 focus:shadow-none"
                            style="border: none; border-bottom: 1px solid #9CA3AF; outline: none; box-shadow: none;"
                            placeholder="{{ __('Surname Placeholder') }}">
                    </div>
                </div>

                <!-- Phone/Email Field -->
                <div class="relative pt-[15px] md:pt-[30px]">
                    <input type="text" id="contact-contact" name="contact" required
                        class="w-full h-12 bg-transparent text-base md:text-xl font-bold font-['Montserrat'] uppercase leading-relaxed text-black dark:text-white appearance-none focus:ring-0 focus:shadow-none"
                        style="border: none; border-bottom: 1px solid #9CA3AF; outline: none; box-shadow: none;"
                        placeholder="{{ __('Contact Placeholder') }}">
                </div>

                <!-- Message Field -->
                <div class="flex-1 relative pt-[15px] md:pt-[60px]">
                    <textarea id="contact-message" name="message" required
                        class="w-full h-[200px] md:h-[345px] bg-transparent text-base md:text-xl font-bold font-['Montserrat'] uppercase leading-relaxed text-black dark:text-white appearance-none focus:ring-0 focus:shadow-none"
                        style="border: none; border-bottom: 1px solid #9CA3AF; outline: none; resize: none; box-shadow: none;"
                        placeholder="{{ __('Message Placeholder') }}"></textarea>
                </div>

                <!-- Required Fields Note and Submit Button -->
                <div
                    class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-0 !mb-[20px] md:!mb-[50px]">
                    <div class="flex items-center space-x-3 order-2 md:order-1">
                        <span
                            class="text-veteran-blue text-3xl md:text-4xl font-normal font-['Montserrat'] pt-[10px] md:pt-[15px]">*</span>
                        <span
                            class="text-black dark:text-white text-sm md:text-lg font-bold font-['Montserrat'] leading-6">
                            {{ __('Required Fields Note') }}</span>
                    </div>
                    <button type="submit"
                        class="order-1 md:order-2 w-full md:w-[260px] h-[60px] md:h-[70px] px-8 py-6 rounded-full border-2 border-veteran-blue bg-transparent text-black dark:text-white text-base md:text-lg font-black font-['Montserrat'] uppercase leading-normal tracking-wide hover:bg-veteran-blue hover:text-white transition-colors duration-300 flex items-center justify-center">
                        {{ __('Send Button') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Placeholder styling for contact form */
    #contact-name::placeholder,
    #contact-surname::placeholder,
    #contact-contact::placeholder,
    #contact-message::placeholder {
        color: #000000;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        opacity: 1;
    }

    /* Dark Mode Placeholders */
    .dark #contact-name::placeholder,
    .dark #contact-surname::placeholder,
    .dark #contact-contact::placeholder,
    .dark #contact-message::placeholder {
        color: #FFFFFF;
        opacity: 0.7;
    }

    /* Focus: force only underline color change, no outline/box shadows */
    #contact-name:focus,
    #contact-surname:focus,
    #contact-contact:focus,
    #contact-message:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    #contact-name:focus {
        border-bottom-color: #3971E2;
    }

    #contact-surname:focus {
        border-bottom-color: #3971E2;
    }

    #contact-contact:focus {
        border-bottom-color: #3971E2;
    }

    #contact-message:focus {
        border-bottom-color: #3971E2;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('contact-modal');
        const closeBtn = document.getElementById('close-contact-modal');
        const form = document.getElementById('contact-form');

        // Close modal
        closeBtn.addEventListener('click', function () {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });

        // Close modal when clicking outside
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });

        // Form submission
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            const url = "{{ route('contact.submit') }}";

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show toast notification
                        const toast = document.getElementById('contact-toast');
                        toast.classList.remove('opacity-0');
                        toast.classList.add('opacity-100');

                        // Hide after 3 seconds
                        setTimeout(function () {
                            toast.classList.remove('opacity-100');
                            toast.classList.add('opacity-0');
                        }, 3000);

                        // Reset form and close modal
                        form.reset();
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                    } else {
                        alert('Помилка відправки. Спробуйте пізніше.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Помилка відправки. Перевірте з\'єднання.');
                });
        });

        // Function to open modal
        window.openContactModal = function () {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        };
    });
</script>
<!-- Toast Notification -->
<div id="contact-toast"
    class="fixed bottom-8 left-1/2 -translate-x-1/2 bg-veteran-blue text-white px-6 py-3 rounded-lg shadow-lg z-[60] opacity-0 transition-opacity duration-300 pointer-events-none">
    <p class="text-base font-bold font-['Montserrat'] m-0">Повідомлення надіслано!</p>
</div>

<!-- Contact Modal -->
<div id="contact-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
    <div
        class="bg-white w-[95%] sm:w-full sm:max-w-[776px] h-auto max-h-[90vh] overflow-y-auto rounded-[30px] relative scrollbar-hide">
        <!-- Close Button -->
        <button id="close-contact-modal"
            class="absolute top-6 right-6 z-10 w-8 h-8 flex items-center justify-center text-black hover:text-veteran-blue transition-colors">
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
                            class="w-full h-12 bg-transparent text-base md:text-xl font-bold font-['Montserrat'] leading-relaxed text-black appearance-none focus:ring-0 focus:shadow-none"
                            style="border: none; border-bottom: 1px solid #9CA3AF; outline: none; box-shadow: none;"
                            placeholder="[ ІМ'Я* ]">
                    </div>

                    <!-- Surname Field -->
                    <div class="flex-1 relative">
                        <input type="text" id="contact-surname" name="surname"
                            class="w-full h-12 bg-transparent text-base md:text-xl font-bold font-['Montserrat'] leading-relaxed text-black appearance-none focus:ring-0 focus:shadow-none"
                            style="border: none; border-bottom: 1px solid #9CA3AF; outline: none; box-shadow: none;"
                            placeholder="[ ПРІЗВИЩЕ ]">
                    </div>
                </div>

                <!-- Phone/Email Field -->
                <div class="relative pt-[15px] md:pt-[30px]">
                    <input type="text" id="contact-contact" name="contact" required
                        class="w-full h-12 bg-transparent text-base md:text-xl font-bold font-['Montserrat'] uppercase leading-relaxed text-black appearance-none focus:ring-0 focus:shadow-none"
                        style="border: none; border-bottom: 1px solid #9CA3AF; outline: none; box-shadow: none;"
                        placeholder="[ тел / імейл* ]">
                </div>

                <!-- Message Field -->
                <div class="flex-1 relative pt-[15px] md:pt-[60px]">
                    <textarea id="contact-message" name="message" required
                        class="w-full h-[200px] md:h-[345px] bg-transparent text-base md:text-xl font-bold font-['Montserrat'] uppercase leading-relaxed text-black appearance-none focus:ring-0 focus:shadow-none"
                        style="border: none; border-bottom: 1px solid #9CA3AF; outline: none; resize: none; box-shadow: none;"
                        placeholder="[ Твій запит / відгук* ]"></textarea>
                </div>

                <!-- Required Fields Note and Submit Button -->
                <div
                    class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-0 !mb-[20px] md:!mb-[50px]">
                    <div class="flex items-center space-x-3 order-2 md:order-1">
                        <span
                            class="text-veteran-blue text-3xl md:text-4xl font-normal font-['Montserrat'] pt-[10px] md:pt-[15px]">*</span>
                        <span class="text-black text-sm md:text-lg font-bold font-['Montserrat'] leading-6"> - Поля
                            обов'язкові до заповнення</span>
                    </div>
                    <button type="submit"
                        class="order-1 md:order-2 w-full md:w-[260px] h-[60px] md:h-[70px] px-8 py-6 rounded-full border-2 border-veteran-blue bg-transparent text-black text-base md:text-lg font-black font-['Montserrat'] uppercase leading-normal tracking-wide hover:bg-veteran-blue hover:text-white transition-colors duration-300 flex items-center justify-center">
                        Надіслати
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

            // Basic validation
            if (!data.name || !data.contact || !data.message) {
                alert('Будь ласка, заповніть всі обов\'язкові поля.');
                return;
            }

            // Here you would typically send the data to your backend
            console.log('Contact form data:', data);

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
        });

        // Function to open modal
        window.openContactModal = function () {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        };
    });
</script>
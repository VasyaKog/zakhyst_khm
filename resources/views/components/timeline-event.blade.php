<!-- Timeline Event Component -->
@props(['date', 'year', 'description', 'active' => false])

<div {{ $attributes->merge(['class' => 'timeline-event group flex items-start mb-[60px] lg:mb-[155px] opacity-20 [&.is-active]:opacity-100 transition-opacity duration-300 hover:opacity-100']) }}
    data-active="{{ $active ? 'true' : 'false' }}">
    <!-- Dot (circle) -->
    <div class="w-10 h-10 flex-shrink-0 pt-[10px] lg:pt-[51px] relative flex items-center justify-center">
        <!-- Active Dot (Blue) - Visible when .is-active -->
        <svg class="hidden group-[.is-active]:block w-[30px] h-[30px] lg:w-[40px] lg:h-[40px]" viewBox="0 0 40 40"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="#3971E2" stroke="none" />
        </svg>
        <!-- Inactive Dot (Grey) - Visible when NOT .is-active -->
        <svg class="block group-[.is-active]:hidden w-[30px] h-[30px] lg:w-[40px] lg:h-[40px]" viewBox="0 0 40 40"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="#BEBEBE" stroke="none" />
        </svg>
    </div>

    <!-- Content Wrapper -->
    <div class="flex flex-col lg:flex-row flex-1 ml-[20px] lg:ml-[30px]">
        <!-- Date Section -->
        <div class="w-full lg:min-w-[200px] lg:w-auto flex-shrink-0 mb-[20px] lg:mb-0">
            <!-- Date (small text) -->
            <p
                class="text-[0.875rem] lg:text-[1.25rem] font-extrabold font-['Montserrat'] text-black dark:text-white tracking-[3px] lg:tracking-[4.8px] uppercase leading-[0.92] mb-[10px] lg:mb-[18px] transition-colors">
                {{ $date }}
            </p>

            <!-- Year (large text) -->
            <p
                class="text-[3rem] lg:text-[5rem] font-extrabold font-['Montserrat'] text-black dark:text-white uppercase leading-[0.92] mb-[15px] lg:mb-[28px] whitespace-nowrap transition-colors">
                {{ $year }}
            </p>

            <!-- Horizontal line -->
            <div
                class="w-[full] max-w-[150px] lg:w-[198px] lg:max-w-none h-[6px] lg:h-[12px] bg-black dark:bg-white transition-colors">
            </div>
        </div>

        <!-- Description -->
        <div class="lg:ml-[50px] flex-1 pt-0 lg:pt-[38px]">
            <p
                class="text-[1.125rem] lg:text-[2rem] font-normal font-['Montserrat'] text-black dark:text-gray-200 leading-[1.35] lg:leading-[1.25] transition-colors">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
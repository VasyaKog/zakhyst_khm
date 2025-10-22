<!-- Timeline Event Component -->
@props(['date', 'year', 'description', 'active' => false])

<div class="flex items-start mb-[155px] {{ $active ? '' : 'opacity-20' }} transition-opacity duration-300 hover:opacity-100">
    <!-- Dot (circle) -->
    <div class="w-10 h-10 flex-shrink-0 pt-[51px]">
        @if($active)
            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="19" fill="#3971E2" stroke="none"/>
            </svg>
        @else
            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="19" fill="#BEBEBE" stroke="none"/>
            </svg>
        @endif
    </div>
    
    <!-- Date Section -->
    <div class="ml-[30px] w-[200px] flex-shrink-0">
        <!-- Date (small text) -->
        <p class="text-[20px] font-extrabold font-['Montserrat'] text-black tracking-[4.8px] uppercase leading-[0.92] mb-[18px]">
            {{ $date }}
        </p>
        
        <!-- Year (large text) -->
        <p class="text-[80px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92] mb-[28px]">
            {{ $year }}
        </p>
        
        <!-- Horizontal line (198px wide, 12px high) -->
        <div class="w-[198px] h-[12px] bg-black"></div>
    </div>
    
    <!-- Description (flex-1 to take remaining space, aligned with top of year) -->
    <div class="ml-[50px] flex-1 pt-[38px]">
        <p class="text-[32px] font-normal font-['Montserrat'] text-black leading-[1.25]">
            {{ $description }}
        </p>
    </div>
</div>


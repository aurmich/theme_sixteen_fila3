<div class="flex flex-col gap-2.5">
    <p class="text-black font-semibold text-sm">
        Volume
    </p>
    <p class="text-sm leading-none text-neutral-3 font-roboto">
        Amount traded in a market, plus its initial
        liquity.
    </p>
    <div class="flex items-center gap-2">
<<<<<<< HEAD
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="16px">
=======
        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="16px">
>>>>>>> origin/dev
            <path fill="white"
                d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0s10 4.477 10"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0s10 4.477 10 10zm-5-.01c0-1.341-.47-2.584-1.311-3.491l1.057-1.262H13.18l-.43.493C12.005 5.276 11.066 5 9.99 5 6.88 5 5 7.288 5 9.99c0 1.322.45 2.544 1.272 3.452l-1.115 1.321h1.526l.47-.552c.763.493 1.722.789 2.837.789C13.121 15 15 12.712 15 9.99zm-7.084 1.5a3.374 3.374 0 01-.333-1.5c0-1.48.861-2.761 2.407-2.761.47 0 .88.118 1.233.335zm4.5-1.5c0 1.5-.88 2.781-2.426 2.781-.509 0-.94-.138-1.291-.375l3.346-3.964c.235.454.372.986.372 1.558z"
                fill="#1591ed"></path>
<<<<<<< HEAD
        </svg>
        <span class="text-sm text-neutral-3"
            {{-- x-text="formatCurrency(market.volume_play_money)+'øinplaymoney'" --}}></span>
    </div>
    <div class="flex items-center gap-2">
=======
        </svg> --}}
        <span class="text-sm text-neutral-3">
            {{ $article->volume_credit }}
        </span>
    </div>
    {{-- <div class="flex items-center gap-2">
>>>>>>> origin/dev
        <svg width="16px" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M8.99935 17.3334C4.39685 17.3334 0.666016 13.6026 0.666016 9.00008C0.666016 4.39758 4.39685 0.666748 8.99935 0.666748C13.6018 0.666748 17.3327 4.39758 17.3327 9.00008C17.3327 13.6026 13.6018 17.3334 8.99935 17.3334ZM6.08268 10.6667V12.3334H8.16602V14.0001H9.83268V12.3334H10.666C11.2185 12.3334 11.7485 12.1139 12.1392 11.7232C12.5299 11.3325 12.7493 10.8026 12.7493 10.2501C12.7493 9.69755 12.5299 9.16764 12.1392 8.77694C11.7485 8.38624 11.2185 8.16675 10.666 8.16675H7.33268C7.22218 8.16675 7.11619 8.12285 7.03805 8.04471C6.95991 7.96657 6.91602 7.86059 6.91602 7.75008C6.91602 7.63957 6.95991 7.53359 7.03805 7.45545C7.11619 7.37731 7.22218 7.33341 7.33268 7.33341H11.916V5.66675H9.83268V4.00008H8.16602V5.66675H7.33268C6.78015 5.66675 6.25024 5.88624 5.85954 6.27694C5.46884 6.66764 5.24935 7.19755 5.24935 7.75008C5.24935 8.30262 5.46884 8.83252 5.85954 9.22322C6.25024 9.61392 6.78015 9.83341 7.33268 9.83341H10.666C10.7765 9.83341 10.8825 9.87731 10.9606 9.95545C11.0388 10.0336 11.0827 10.1396 11.0827 10.2501C11.0827 10.3606 11.0388 10.4666 10.9606 10.5447C10.8825 10.6228 10.7765 10.6667 10.666 10.6667H6.08268Z"
                fill="#00D966"></path>
        </svg>
<<<<<<< HEAD
        <span class="text-sm text-neutral-3"
            {{-- x-text="'≈'+formatCurrency(market.volume_real_money,'en-US',style:'currency',currency:'USD',minimumFractionDigits:2,maximumFractionDigits:2)+'inUSD'" --}}></span>
    </div>
=======
        <span class="text-sm text-neutral-3">
            aaaaaaaaaa
        </span>
    </div> --}}
>>>>>>> origin/dev
</div>
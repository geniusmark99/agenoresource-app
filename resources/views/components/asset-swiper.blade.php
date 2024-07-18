@props(['pictures'])

@php
$classes = ($active ?? false)
@endphp

<div class="swiper-container relative" {{ $attributes->merge(['class' => "group"]) }}>
    <div class="swiper-wrapper">
        @foreach ($pictures as $picture)
            <div class="swiper-slide w-full">
                <img src="{{ asset($picture) }}" alt="Asset Image" 
                class="w-full object-cover h-[230px] md:h-[400px]" draggable="false">

            </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next group-hover:flex"></div>
    <div class="swiper-button-prev group-hover:flex"></div>
</div>

<style>
    .swiper-pagination {
        display: flex;
        justify-content: center;
        bottom: 0;
        position: absolute;
    }

    .swiper-button-next, .swiper-button-prev {
        display: flex;
        background-color: rgba(0, 0, 0, 0.5); 
        color: white; 
        border-radius: 50%; 
        width: 30px; 
        height: 30px;
        justify-content: center;
        align-items: center;
    }

    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 0.8rem; 
    }

        @media screen and (min-width: 900px) {
    .swiper-button-next, .swiper-button-prev {
        width: 40px; 
        height: 40px;
    }

    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 1.2rem; 
    }
    }

  

    .swiper-button-next {
        right: 10px; 
    }

    .swiper-button-prev {
        left: 10px; 
    }

    .group:hover .swiper-button-next,
    .group:hover .swiper-button-prev {
        opacity: 1; /* Show on hover */
    }
</style>
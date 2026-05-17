@props([
    "page_title",
    "page_description"
])
    
    <!-- Page Header -->
    <div class="pt-5 mt-5"></div>
        <section class="py-5 position-relative">
            <div class="position-absolute top-0 start-50 translate-middle-x w-50 h-50 bg-gradient-custom opacity-50" style="filter: blur(100px); z-index: -1;"></div>
            <div class="container text-center">
                <h1 class="display-4 fw-bold gs_reveal"><span class="text-gradient">{{ $page_title }}</span></h1>
                <p class="lead max-w-2xl mx-auto gs_reveal_up">{{ $page_description }}</p>
            </div>
        </section>
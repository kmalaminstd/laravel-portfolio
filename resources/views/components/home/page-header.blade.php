@props([
    "page_title",
    "page_description"
])

<section class="page-header">
    <div class="container-site">
        <p class="eyebrow gs_reveal">Portfolio</p>
        <h1 class="gs_reveal">{{ $page_title }}</h1>
        <p class="gs_reveal_up">{{ $page_description }}</p>
    </div>
</section>

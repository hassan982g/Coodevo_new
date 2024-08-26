<section class="section-service">
    <div class="bg-colorIvory" style="background-color:rgba(221,221,221,0.30)">
        <div class="section-space">
            <div class="container">
                <div class="section-block mx-auto mb-10 max-w-[650px] text-center md:mb-[60px] xl:mb-20 xl:max-w-[856px]">
                    <h2 class="jos">
                        <!-- We {{ isset($page_name) && $page_name == "service_details" ? 'also' : '' }} provide effective design
                        <span>
                            solutions
                        </span> -->


                        What we offer

                    </h2>

                    <p>We can realize the needs of the business. We offer a comprehensive approach to solving your problems.</p>
                </div>
                <livewire:services.front-list-services :slug="isset($slug) ? $slug : null" />
            </div>
        </div>
    </div>
</section>
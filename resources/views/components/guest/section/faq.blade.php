 <!--==================== FAQ ====================-->
 <section class="FAQ section" id="FAQ">
     <div class="FAQ__container container">
         <h2 class="section__title FAQ__section__title">FAQ</h2>
         <div class="accordion accordion-flush" id="accordionFlushExample">
             <div class="accordion-item">
                 @foreach ($faqs as $faq)
                     <h2 class="accordion-header">
                         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                             data-bs-target="#flush-collapse{{ $faq->id }}" aria-expanded="false"
                             aria-controls="flush-collapse{{ $faq->id }}">
                             {{ $faq->question }}
                             <i class="ri-arrow-down-s-line ms-auto"></i>
                         </button>
                     </h2>
                     <div id="flush-collapse{{ $faq->id }}" class="accordion-collapse collapse"
                         data-bs-parent="#accordionFlushExample">
                         <div class="accordion-body">
                             {{ $faq->answer }}
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </div>
 </section>

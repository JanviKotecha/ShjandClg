<a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
<!-- ===============>> scrollToTop ending here <<================= -->


<!-- vendor plugins -->

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/fslightbox.js"></script>
<script src="assets/js/purecounter_vanilla.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


<script src="assets/js/custom.js"></script>

<!-- pagination script for Home page service section -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const itemsPerPage = 6; // Number of items to show per page
      const services = document.querySelectorAll('.service-item'); // All service items
      const paginationLinks = document.querySelectorAll('.pagination-link'); // All pagination links
      const prevButton = document.querySelector('.paginationPrev');
      const nextButton = document.querySelector('.paginationNext');
      let currentPage = 1;
      const totalPages = Math.ceil(services.length / itemsPerPage);

      // Function to display services based on the page
      function showPage(page) {
          // Hide all services first
          services.forEach(service => {
              service.style.display = 'none';
              if (service.classList.contains(`page-${page}`)) {
                  service.style.display = 'block';
              }
          });

          // Update pagination active state
          paginationLinks.forEach(link => {
              link.classList.remove('active');
              if (link.getAttribute('data-target') === `page-${page}`) {
                  link.classList.add('active');
              }
          });

          // Update current page
          currentPage = page;
      }

      // Event listeners for pagination
      paginationLinks.forEach(link => {
          link.addEventListener('click', function(e) {
              e.preventDefault();
              const page = parseInt(this.getAttribute('data-target').split('-')[1]);
              showPage(page);
          });
      });

      // Event listeners for prev and next buttons
      prevButton.addEventListener('click', function(e) {
          e.preventDefault();
          if (currentPage > 1) {
              showPage(currentPage - 1);
          }
      });

      nextButton.addEventListener('click', function(e) {
          e.preventDefault();
          if (currentPage < totalPages) {
              showPage(currentPage + 1);
          }
      });

      // Initialize pagination on page load
      showPage(currentPage);

      // Initialize AOS animations
      AOS.init();
  });
</script>

           <!-- Footer -->
           <footer class="content-footer footer bg-footer-theme">
               <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                   <div class="mb-2 mb-md-0">
                       © Copyright Aplikasi Arsip 2022
                   </div>
               </div>
           </footer>
           <!-- / Footer -->

           <div class="content-backdrop fade"></div>
           </div>
           <!-- Content wrapper -->
           </div>
           <!-- / Layout page -->
           </div>

           <!-- Overlay -->
           <div class="layout-overlay layout-menu-toggle"></div>
           </div>
           <!-- / Layout wrapper -->

           <!-- Core JS -->
           <!-- build:js assets/vendor/js/core.js -->
           <script src="assets/vendor/libs/jquery/jquery.js"></script>
           <script src="assets/vendor/libs/popper/popper.js"></script>
           <script src="assets/vendor/js/bootstrap.js"></script>
           <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

           <script src="assets/vendor/js/menu.js"></script>
           <!-- endbuild -->

           <!-- Vendors JS -->
           <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

           <!-- Main JS -->
           <script src="assets/js/main.js"></script>

           <!-- Page JS -->
           <script src="assets/js/dashboards-analytics.js"></script>

           <!-- Place this tag in your head or just before your close body tag. -->
           <script async defer src="https://buttons.github.io/buttons.js"></script>

           <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
           <script>
               $(document).ready(function() {
                   $('#myTable').DataTable();
               });
           </script>

           <script>
               const togglePassword = document.querySelector('#togglePassword');
               const password = document.querySelector('#id_password');

               togglePassword.addEventListener('click', function(e) {
                   // toggle the type attribute
                   const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                   password.setAttribute('type', type);
                   // toggle the eye slash icon
                   this.classList.toggle('fa-eye-slash');
               });
           </script>
           </body>

           </html>
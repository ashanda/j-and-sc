<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package j&SC
 */

?>
        <div class="footer-section">
            <div class="footer">
                <div class="footer-main-text">
                    <p class="footer-main">
                        <span class="f1"><?php echo date("Y"); ?> J & SC All right Exproved. Website by</span>
                        <span class="F2">Companies</span>
                    </p>
                </div>

                <div class="footer-sub-text">
                    <p>
                        <span class="fs1">Privacy Policy | </span>
                        <span class="fs1">FAQ's</span>
                    </p>

                </div>
            </div>
            <button onclick="topFunction()" id="topBtn" title="Go to top"><img src="<?php echo get_template_directory_uri(); ?>/inc/images/bottom_png.png"
                    alt=""></button>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/inc/script.js"></script>

    <script type="text/javascript">
        $('.owl-carousel1').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                },
                1400: {
                    items: 5
                }
            }
        })

        $('.owl-carousel2').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                },
                1400: {
                    items: 5
                }
            }
        })
    </script>
	<?php wp_footer(); ?>
</body>
</html>
	

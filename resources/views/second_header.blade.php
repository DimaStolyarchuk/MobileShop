<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-md-12 ">
                    <div class="footer-box">
                        <div class="headinga">
                            <h3>Наші контакти</h3>
                            <span>Україна, Київ, вулиця Симиренко 2в</span>
                            <p>(097) 456 16 60
                                <br>dima@gmail.com</p>
                        </div>
                        <ul class="location_icon">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                        <div class="menu-bottom">
                            <ul class="link">
                                <li> <a href="/">Головна сторинка</a> </li>
                                <li> <a href="about">Про нас</a> </li>
                                <li> <a href="brand">Бренд</a> </li>
                                <li> <a href="specials">Пропозиції</a> </li>
                                <li> <a href="contact">Контакти</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>© 2019 Всі права захищені. Дизайн за допомогою безкоштовних шаблонів HTML</p>
            </div>
        </div>
    </div>
</footer>

<script src='{{ asset('js/jquery.min.js') }}'></script>
<script src='{{ asset('js/popper.min.js') }}'></script>
<script src='{{ asset('js/bootstrap.bundle.min.js') }}'></script>
<script src='{{ asset('js/jquery-3.0.0.min.js') }}'></script>
<script src='{{ asset('js/plugin.js') }}'></script>
<!-- sidebar -->
<script src='{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}'></script>
<script src='{{ asset('js/custom.js') }}'></script>
<!-- javascript -->
<script src='{{ asset('js/owl.carousel.js') }}'></script>
<script src='{{ asset('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}'></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>
</body>

</html>




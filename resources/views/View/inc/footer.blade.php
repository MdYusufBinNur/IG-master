<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=252147962630867&autoLogAppEvents=1" nonce="P5rFEJkE"></script>
<footer class="py-5 border border-top border-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4">
                @if(!empty($owner))

                    <a href="{{route('/')}}"><img src="{{asset($owner->owner_image)}}" class="header-logo"
                                                  alt="IG Education Logo" /></a>
                    <h2 class="display-5 color-primary">{{ $owner->owner_name }}</h2>
                    <p class="text-justify py-3">{{ $owner->owner_message }}</p>
                @endif

                <p class="socials">
                    <a href="https://www.facebook.com/InspirenGlobalEducation/" target="_blank"><i
                            class="fab fa-2x fa-facebook social-fb mr-3"></i></a>
                    <a href="https://twitter.com/InspirenEdu" target="_blank"><i
                            class="fab fa-twitter social-twitter fa-2x mr-3"></i></a>
                    <a href="https://www.linkedin.com/in/inspiren-global-education-b79457194/" target="_blank"><i
                            class="fab fa-2x fa-linkedin social-linkedin mr-3"></i></a>
                </p>
            </div>
            <div class="col-12 col-md-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7751628087376!2d-0.06868078384391355!3d51.51734077963678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761dd04a1cbff1%3A0x973021f589122d30!2sInspiren%20Global%20Education%20Ltd.!5e0!3m2!1sen!2sbd!4v1577269861290!5m2!1sen!2sbd"
                    class="w-100 h-100" frameborder="0" style="border:0;" allowfullscreen="" ></iframe>
            </div>
            <div class="col-12 col-md-4 mt-1">
                <div class="fb-page" data-href="https://www.facebook.com/InspireGlobalEducation/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/InspireGlobalEducation/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/InspireGlobalEducation/">Inspire Global Education</a></blockquote></div>            </div>
        </div>
    </div>
</footer>

<section class="bg-color-primary pt-3 pb-2 text-light">
    <p class="text-justify text-center">Copyright &copy; 2019 | All rights reserved by Inspiren Global Education Ltd.
    </p>
</section>
<a href="#" class="back2top" title="Back to Top" style="display: inline; bottom: 30px;">Back to Top</a>

{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"--}}
{{--        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">--}}
{{--</script>--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- Including Owl JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Including Custom JS -->
<script src="{{asset('View/js/default.js')}}"></script>
<script src="{{asset('View/js/data_loader.js')}}"></script>
<!-- Including Owl JS -->
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--}}
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
        @if(Session::has('message'))
        let type="{{Session::get('alert-type','info')}}"

        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

</script>

<script !src="">
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        //$('.sticky').css('margin-bottom','30px')
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")

        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
@yield('script')





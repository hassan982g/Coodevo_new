<script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jos.min.js') }}"></script>

@livewireScripts
@stack('scripts')
<script>
    function closeAlert(event){
        let element = event.target;
        while(element.nodeName !== "BUTTON"){
        element = element.parentNode;
        }
        element.parentNode.parentNode.removeChild(element.parentNode);
    }
</script>
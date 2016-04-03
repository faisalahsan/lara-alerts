    <link rel="stylesheet" href="/css/toast.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="/js/toast.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $.toast({
                        text: "{{ $params['text'] }}", // Text that is to be shown in the toast
                        heading: "{{ $params['heading'] }}", // Optional heading to be shown on the toast
                        icon: "{{ $params['icon'] }}", // Type of toast icon
                        showHideTransition: "{{ $params['showHideTransition'] }}", // fade, slide or plain
                        allowToastClose: Boolean("{{ $params['allowToastClose'] }}") , // Boolean value true or false
                        hideAfter: $.isNumeric("{{ $params['hideAfter'] }}") ? "{{ $params['hideAfter'] }}" : Boolean("{{ $params['hideAfter'] }}"), // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                        stack: "{{ $params['stack'] }}", // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                        position: "{{ $params['position'] }}", // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
                        textAlign: "{{ $params['textAlign'] }}",  // Text alignment i.e. left, right or center
                        loader: Boolean("{{ $params['loader'] }}"),  // Whether to show loader or not. True by default
                        loaderBg: "{{ $params['showHideTransition'] }}",  // Background color of the toast loader
                        beforeShow: function () {}, // will be triggered before the toast is shown
                        afterShown: function () {}, // will be triggered after the toat has been shown
                        beforeHide: function () {}, // will be triggered before the toast gets hidden
                        afterHidden: function () {}  // will be triggered after the toast has been hidden
                    });
            });
    </script>

    <!-- jquery-3.2.1 -->
    <script src="<?php echo base_url(); ?>assets/jquery/jquery-3.2.1.min.js"></script>
    
    <!-- jquery-ui 1.12.1 -->
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>



    <script type="text/javascript">

        var page = 1;

        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() >= $(document).height()) {
                loadMoreData(page);
                page++;
            }
        });

        function loadMoreData(page){
          $.ajax({
                url: '<?php echo base_url(); ?>',
                data: {page: page},
                type: "get",
                beforeSend: function() {
                    $('.ajax-load').show();
                },
                success: function(data) {
                    if (!$.trim(data)){   
                        $('.ajax-load').html("No more records found");
                    }
                    else{   
                        $('.ajax-load').hide();
                        $("#post-data").append(data);
                    }
                },
                error: function() {
                    alert('server not responding...');
                }
            })
        }
    </script>

</body>

</html>



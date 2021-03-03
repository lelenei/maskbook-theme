jQuery(document).ready(function($) { 

    $(".video").click(function(e) {
        e.preventDefault();
        $("#Video").attr('src',$(this).attr('source'));
        $("#Video")[0].load();  
        $("#videoDialog").modal();

        $('#videoDialog').on('hidden.bs.modal',function(e){
            $("#Video")[0].pause()
            $("#Video")[0].currentTime = 0
        })

        $('#videoDialog').on('show.bs.modal', function(e) {
                
                $("#Video")[0].play()
        })

    })

});
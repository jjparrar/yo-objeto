$( document ).ready(function() {
    $('.foto').click(function(e){
        e.preventDefault();
        $('<div>'+htmlVIdeo($(this).attr('data-video'))+'</div>').dialog({
            dialogClass: 'noTitleStuff',
            height: $(window).height()-20,
            modal:true,
            width: $(window).width()-20,
            open:function(event, ui){
                $(".ui-dialog-titlebar").hide();
            }
        });
    });
    function htmlVIdeo(video){
        var height=$(window).height()-100;
        var width=$(window).width()-60;
        return '<iframe id="videodiv" width="'+width+'" height="'+height+'" src="'+video+'" frameborder="0" allowfullscreen></iframe>'
    };
});
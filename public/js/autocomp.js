function autocomp(){
    $('#freeword').autocomplete ({
            /**プルダウンリスト */
            source:list,
            select: function(event, ui){
                var form = document.getElementById('searchForm')
                location.href = form.action + '?freeword=' + encodeURI(ui.item.value)
            }
        });
    };
    
    
$(window).load(function(){
        autocomp();
    });
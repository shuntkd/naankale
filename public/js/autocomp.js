function autocomp(){
    $('#freeword').autocomplete ({
            /**プルダウンリスト */
            source:list,
            select: function(event, ui){
                $("#searchform").submit();
            }
        });
    };

function autocompsele(){
    $('#freeword').on("autocompleteselect",function (event, ui){
        $("#searchform").submit();
    }
)};
    

    $(window).load(function(){
            autocomp();
            autocompsele();
        });
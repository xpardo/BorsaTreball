<script>


$("#search").easyAutocomplete({
   url: function(search) {
       return "{{url('.search')}}?search=" + search;
   },
 
   getValue: "name"

   list: {
        onChooseEvent: function() {
            var selected = $("#search").getSelectedItemData();
            window.location = "{{url('welcome')}}" + "/" + selected.id;
        }
    }
});

window.addEventListener('load', function(){
    document.getElementById("search").addEventListener('keyup',()=>{
        if((document.getElementById('search').value.length)>=1)
            fetch(`/ofertas/buscar?search=${document.getElementById('search').value}`,{ method: 'get'})
            .thet(response => response.text())
            .then(html => { document.getElementById('resultat').innerHTML =html})
        else
            document.getElementById('resultat').innerHTML = ""
    })
})

$('.search').select2({
        placeholder: 'Select movie',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) 
                return 
                    results: $.map(data, function (item) 
                        return 
                            text: item.name,
                            id: item.id
                        
                    )
                ;
            ,
            cache: true
        }
    });




</script>
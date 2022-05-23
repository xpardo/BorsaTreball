<script>


$("#search").easyAutocomplete({
   url: function(search) {
<<<<<<< HEAD
<<<<<<< HEAD
       return "{{route('search')}}?search=" + search;
=======
       return "{{url('.search')}}?search=" + search;
>>>>>>> devel
=======
       return "{{url('.search')}}?search=" + search;
>>>>>>> b8c6b7fa48cb2aeafd93f9f90dd39f539ac19c78
   },
 
   getValue: "name"

   list: {
        onChooseEvent: function() {
            var selected = $("#search").getSelectedItemData();
            window.location = "{{url('welcome')}}" + "/" + selected.id;
        }
    }
});

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b8c6b7fa48cb2aeafd93f9f90dd39f539ac19c78
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


<<<<<<< HEAD
>>>>>>> devel
=======
>>>>>>> b8c6b7fa48cb2aeafd93f9f90dd39f539ac19c78


</script>
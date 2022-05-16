<script>


$("#search").easyAutocomplete({
   url: function(search) {
       return "{{route('search')}}?search=" + search;
   },
 
   getValue: "name"

   list: {
        onChooseEvent: function() {
            var selected = $("#search").getSelectedItemData();
            window.location = "{{url('welcome')}}" + "/" + selected.id;
        }
    }
});



</script>
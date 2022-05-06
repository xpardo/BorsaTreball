<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function modalEdit(id,tit,est,cod){
            $('#title-edit').val(tit);
            $('#state-edit').val(est);
            $('#curri_id').val(id);
            $('#curri_code').val(cod);
        }
    </script>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>

        $("#btn-register" ).click(function() {
            var formData = new FormData(document.getElementById("exampleModal"));
            $.ajax({
                url: "{{ route('curri_register') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res){
                msg = JSON.parse(res).response.msg
                alert(msg);
                location.reload();
            }).fail(function(res){
                console.log(res)
            });
        });
        function showFile(id){
            $.ajax({
                url: "{{ asset('/curri/file/') }}/"+id,
                type: "get",
                dataType: "html",
                contentType: false,
                processData: false
            }).done(function(res){
                url = JSON.parse(res).response.url
                window.open('storage/'+url,'_blank');
            }).fail(function(res){
                console.log(res)
            });
        }
        $( "#btn-update" ).click(function() {
            var formData = new FormData(document.getElementById("exampleModalEdit"));
            $.ajax({
                url: "{{ route('curri_update') }}",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(res){
                msg = JSON.parse(res).response.msg
                alert(msg);
                location.reload();
            }).fail(function(res){
                console.log(res)
            });
        });
        function deletecurri(id){
            $.ajax({
                url: "{{ asset('/curri/delete/') }}/"+id,
                type: "get",
                dataType: "html",
                contentType: false,
                processData: false
            }).done(function(res){
                msg = JSON.parse(res).response.msg
                alert(msg);
                location.reload();
            }).fail(function(res){
                console.log(res)
            });
        }
    </script>
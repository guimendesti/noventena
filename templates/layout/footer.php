

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

<script type="text/javascript">
    function acaoDeletar(entidade, id){
        $.ajax({ url: '/api/'+entidade+'/'+id, method: "DELETE" })
            .then(function (data) {
                alert('Deletado');
                location.reload();
            })
            .catch(function (err) {
                alert('Erro ao Deletar');
            });
    }
</script>

</body>
</html>
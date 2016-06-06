        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; TUGAS CRUD CI - Janaka</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <!-- Datatables -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      var user = $('#tabel_user').DataTable( {
        ajax: "tampil_user",
        columns: [
          { "data": "no" },
          { "data": "username" },
          { "data": "id" }
        ]
      } );
      
      var bookmark = $('#tabel_bookmark').DataTable( {
        ajax: "tampil_bookmark",
        columns: [
          { "data": "no" },
          { "data": "title" },
          { "data": "url" },
          { "data": "id" }
        ]
      } );
    </script>

</body>

</html>

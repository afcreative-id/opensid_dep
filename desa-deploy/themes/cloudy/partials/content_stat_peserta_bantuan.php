<div class="table-responsive">
  <table class="table table-striped table-bordered" id="peserta_program">
    <thead>
      <tr>
        <th>No</th>
        <th>Program</th>
        <th>Nama Peserta</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tfoot>
    </tfoot>
  </table>
</div>

<script>
  $(document).ready(function() {
    var url = "<?= site_url($this->controller . '/ajax_peserta_program_bantuan') ?>";
    table = $('#peserta_program').DataTable({
      'processing': true,
      'serverSide': true,
      "pageLength": 10,
      'order': [],
      "ajax": {
        "url": url,
        "type": "POST",
        "data": {
          stat: $('#stat').val()
        }
      },
      //Set column definition initialisation properties.
      "columnDefs": [{
        "targets": [0, 3], //first column / numbering column
        "orderable": false, //set not orderable
      }, ],
      'language': {
        'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
      },
      'drawCallback': function() {
        $('.dataTables_paginate > .pagination').addClass('pagination-sm no-margin');
      }
    });
  });
</script>
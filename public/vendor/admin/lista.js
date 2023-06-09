$(function () {   
     $('#example2').DataTable({       
      "paging": false,
      "lengthChange": false,
      "searching": true,      
      "ordering": true,
      "order": [[0, "asc"]],
      "info": false,
      "autoWidth": false,
      "responsive": true,
      "paging": true,
      "language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
      "emptyTable": "No hay datos disponibles para mostrar",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
      "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
      "infoFiltered": "(filtrado de _MAX_ entradas totales)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "No se encontraron registros coincidentes",
      "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
      },
      },
      "with-buttons": true,
      "buttons": ["csv", "excel", "pdf"]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  /* $(function () {
    $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
}); */



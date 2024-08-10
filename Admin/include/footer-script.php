<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/vendor/js/menu.js"></script>
<!-- Vendors JS -->
<script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<!-- Page JS -->
<script src="assets/js/dashboards-analytics.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
setTimeout(function() {
    $(".msg_success").hide();
    $(".msg_error").hide();
}, 6000);
</script>

<!-- select2  for select multiple from dropdown -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!-- date range picker -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- time picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js">
</script>

<script src="assets/datatables/datatable.js"></script>

<!-- for loader -->
<script> 
    function hideLoader() {
        $('.page-loader').fadeOut('slow');
    }
</script>

<style>
td {
    text-align: center;
    vertical-align: middle;
    padding: 5px !important;
}

.pls-cls {
    padding-left: 40px !important;
}

table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before {
    position: absolute;
    vertical-align: middle;
    background-color: #696cff;
    height: 14px;
    width: 14px;
    line-height: 15px;
    top: 34%;
    left: 20%;
}

table.dataTable thead .sorting {
    background: none;
}

table.dataTable thead .sorting_desc {
    background: none !important;
}

table.dataTable thead .sorting_asc {
    background: none !important;
}

.child ul {
    margin: 10px !important;
    padding: 10px 25px !important;
    border-radius: 10px !important;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    width: 98%;
}

.child ul li {
    display: inline-block;
    width: 100% !important;
}
.course-description-card{
    box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 8px !important;
    padding : 5px 0px;
    border-radius : 10px;
}
.course-description-card ul {
    display: block; 
    width: 100% !important; 
    box-shadow: none !important;
    margin: 0px !important;
    padding: 7px 10px !important;
    list-style: inside !important;
}

.course-description-card ul li {
    display : block;
    width: 100% !important; 
    list-style: inside !important;
}

.dtr-title::after {
  content: " : ";
}
</style>
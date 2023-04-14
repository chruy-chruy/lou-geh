<script>
var printWindow = window.open('./receipt.php?transaction_id=34');
printWindow.onafterprint = window.close;
printWindow.print();
</script>
<?php
 ?>
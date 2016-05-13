<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57339a11957a3642794da980/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Google Analytics -->
<?php
require_once 'php/scripts.model.php';
$model = new PostsModel();

        $data = $model->Listar();
        $script = json_encode($data[0]->{'content'});
        echo substr($script, 1); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/froala_editor.min.css" rel="stylesheet" type="text/css">
<link href="css/froala_style.min.css" rel="stylesheet" type="text/css">


<textarea id='froala' name='post_content' style="margin-top: 30px;"></textarea>


<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="js/froala_editor.min.js"></script>
<!--[if lt IE 9]>
<script src="../js/froala_editor_ie8.min.js"></script>
<![endif]-->
<script src="js/plugins/tables.min.js"></script>
<script src="js/plugins/lists.min.js"></script>
<script src="js/plugins/colors.min.js"></script>
<script src="js/plugins/media_manager.min.js"></script>
<script src="js/plugins/font_family.min.js"></script>
<script src="js/plugins/font_size.min.js"></script>
<script src="js/plugins/block_styles.min.js"></script>
<script src="js/plugins/video.min.js"></script>

<script>
$(function(){
$('#froala').editable({inlineMode: false,minheight: 300,imageUploadURL: 'upload_image.php',imagesLoadURL: 'images_load.php',imageDeleteURL: "delete_image.php" })
$( "a:contains('Unlicensed Froala Editor')" ).remove();
});
</script>
<body>
</body>
</html>

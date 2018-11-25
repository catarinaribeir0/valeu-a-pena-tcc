<html>
<head>
<title>Upload Form</title>
</head>
<body>
<br /><br /><br /><br /><br /><br />
<img src="<?php echo base_url() ?>uploads/<?php echo $this->session->userdata('cpf') ?>.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
<?php echo form_open_multipart('Upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Salvar" />

</form>

</body>
</html>